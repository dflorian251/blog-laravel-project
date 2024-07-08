@extends('layouts.master')

@section('content')
@include('layouts.header')

<header class="bg-cover bg-center h-64" style="background-image: url('https://source.unsplash.com/random/1200x400');">
    <div class="flex items-center justify-center h-full bg-gray-900 bg-opacity-50">
        <h1 class="text-4xl text-white font-bold">Welcome to My Blog</h1>
    </div>
</header>

<!-- Main Content -->
<main class="container mx-auto px-4 mt-8">
    <!-- Featured Post -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Featured Post</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Amazing Blog Post Title</h3>
            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="text-blue-500 hover:underline">Read more...</a>
        </div>
    </section>

    <!-- Recent Posts -->
    <section>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Recent Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Post Title One</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <a href="#" class="text-blue-500 hover:underline">Read more...</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Post Title Two</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <a href="#" class="text-blue-500 hover:underline">Read more...</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Post Title Three</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <a href="#" class="text-blue-500 hover:underline">Read more...</a>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-white shadow-md mt-12">
    <div class="container mx-auto px-4 py-6">
        <div class="flex items-center justify-between">
            <div class="text-gray-700">&copy; 2024 My Blog</div>
            <div>
                <a href="#" class="text-gray-700 hover:text-gray-900 mx-2">Privacy Policy</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 mx-2">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

@endsection
