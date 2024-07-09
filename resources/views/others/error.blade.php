@extends('layouts.master')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg text-center">
        <h1 class="text-6xl font-bold text-red-500 mb-4">ERROR</h1>
        <p class="text-gray-600 mb-6">{{ $message }}</p>
        <a href="{{ route('others.index') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Go to Homepage</a>
    </div>
</div>

@endsection
