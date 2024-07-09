<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        return view('blog.index', ['posts' => $posts]);
    }

    public function getPost($id) {
        $post = Post::find($id);
        return view('blog.post', ['post' => $post]);
    }

    public function getAdminIndex() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.index', ['posts' => $posts]);
    }

    public function getAdminCreate() {
        return view('admin.create');
    }

    public function adminCreatePost(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:25',
            'content' => 'required|min:5'
        ]);
        $post = new Post([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        $post->save();
        return redirect()->route('admin.index')->with('info', 'Post created. Title is: ' . $request->input('title'));
    }
}
