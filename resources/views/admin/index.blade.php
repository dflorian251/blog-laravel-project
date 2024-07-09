@extends('layouts.master')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
        @if(Session::has('info'))
            <div class="mb-4">
                <div class="w-full">
                    <p class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative">{{ Session::get('info') }}</p>
                </div>
            </div>
        @endif
        <div class="mb-4">
            <div class="w-full">
                <a href="{{ route('admin.create') }}" class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-700">Create New Item</a>
            </div>
        </div>
        <hr class="my-4">
        @foreach($posts as $post)
            <div class="mb-4">
                <div class="w-full">
                    <p>
                        <strong>{{ $post->title }}</strong>
                        <a href="{{ route('admin.edit', ['id' => $post->id]) }}" class="text-blue-500 hover:underline">Edit</a>
                        <a href="{{ route('admin.delete', ['id' => $post->id]) }}" class="text-red-500 hover:underline">Delete</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
