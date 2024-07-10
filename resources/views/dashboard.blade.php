@extends('layouts.master')

@section('content')
<div class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</div>

<div class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-2xl font-bold mb-6">Create New Post</h2>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.create') }}" method="post">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" id="title" name="title">
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" id="content" name="content">
                </div>
                <div class="mb-4">
                    {{-- @foreach($tags as $tag)
                        <div class="flex items-center mb-2">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600 transition duration-150 ease-in-out" name="tags[]" value="{{ $tag->id }}" id="tag{{ $tag->id }}">
                            <label for="tag{{ $tag->id }}" class="ml-2 block text-gray-700">{{ $tag->name }}</label>
                        </div>
                    @endforeach --}}
                </div>
                {{ csrf_field() }}
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Submit</button>
            </form>
        </div>
    </div>
</div>


<div class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-md overflow-hidden sm:rounded-lg">
            @if(Session::has('info'))
                <div class="mb-4">
                    <div class="w-full">
                        <p class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative">{{ Session::get('info') }}</p>
                    </div>
                </div>
            @endif
            <h2 class="text-2xl font-bold mb-6">Published Posts</h2>
            <hr class="my-4">
            @foreach($posts as $post)
                <div class="mb-4">
                    <div class="w-full">
                        <p>
                            <strong>{{ $post->title }}</strong>
                            {{-- {{ route('admin.edit', ['id' => $post->id]) }} --}}
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <a href="" class="text-red-500 hover:underline">Delete</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
