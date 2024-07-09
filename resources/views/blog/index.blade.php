@extends('layouts.master')

@section('content')
<!-- Posts Feed -->
<section class="container mx-auto px-4 mt-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Blog Posts</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Post 1 -->
        @foreach ($posts as $post)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="https://source.unsplash.com/random/400x200" alt="Post Image" class="w-full h-40 object-cover rounded-t-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h3>
            <p class="text-gray-600 mb-4">{{ $post->content }}.</p>
            <a href="{{ route('blog.post', ['id' => $post->id]) }}" class="text-blue-500 hover:underline">Read more...</a>
        </div>
        @endforeach
    </div>
</section>
<div class="flex justify-center mt-8">
    <nav class="flex items-center space-x-1" style="display: flex; flex-direction:column" >
        {{ $posts->links('pagination::tailwind') }}

    </nav>
</div>
@endsection
