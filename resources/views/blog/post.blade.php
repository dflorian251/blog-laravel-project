@extends('layouts.master')

@section('content')

<!-- Post Page -->
<article class="container mx-auto px-4 mt-8 max-w-3xl">
    <!-- Post Header -->
    <header class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
        <div class="flex items-center space-x-4 text-gray-600">
            <span>By <a href="#" class="text-blue-500 hover:underline">{{ DB::table('users')->where('id', '=', $post->user_id)->value('name') }}</a></span>
            <span>&bull;</span>
            <span>{{ $post->created_at }}</span>
        </div>
    </header>

    <!-- Post Image -->
    <div class="mb-8">
        <img src="https://picsum.photos/800/400" alt="Post Image" class="w-full h-auto rounded-lg">
    </div>

    <!-- Post Content -->
    <div class="prose prose-lg text-gray-800 mb-8">
        {{ $post->content }}
    </div>

    <!-- Comments Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Comments</h2>
        <div class="space-y-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="https://source.unsplash.com/random/40x40" alt="Avatar" class="w-10 h-10 rounded-full mr-4">
                    <div>
                        <h3 class="font-semibold text-gray-800">Commenter Name</h3>
                        <span class="text-gray-600 text-sm">July 8, 2024</span>
                    </div>
                </div>
                <p class="text-gray-700">This is a comment. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>
</article>
@endsection
