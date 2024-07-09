@extends('layouts.master')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
        <h2 class="text-2xl font-bold mb-6">Edit Item</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.update') }}" method="post">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" id="content" name="content" value="{{ $post->content }}">
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
            <input type="hidden" name="id" value="{{ $postId }}">
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Submit</button>
        </form>
    </div>
</div>

@endsection
