<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

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

    public function getAdminEdit($id) {
        Gate::allowIf(fn (User $user) => $user->id === 0, "This operation is unauthorized. Only admin can edit posts."); // Inline authorization
        $post = Post::find($id);
        return view('admin.edit', ['post' => $post, 'postId' => $id]);
    }

    public function adminUpdatePost(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:25',
            'content' => 'required|min:5'
        ]);
        $post = Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('admin.index')->with('info', 'Post edited. New title is: ' . $request->input('title'));
    }

    public function adminDeletePost($id) {
        $response = Gate::inspect('delete-post', Auth::user());
        if (! $response->allowed()) {
            return view('others.error', ['message' => $response->message()]);
        } else {
            $post = Post::find($id);
            $post->delete();
            return redirect()->route('admin.index')->with('info', 'Post deleted.');
        }
    }
}
