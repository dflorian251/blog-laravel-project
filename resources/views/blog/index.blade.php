@extends('layouts.master')

@section('content')
@include('layouts.header')
<h1>The content</h1>
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="post Image">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('blog.post', ['id' => $post->id]) }}">{{ $post->title }}</a></h5>
                    <p class="card-text">{{ $post->content }}</p>
                    {{-- <div class="tags">
                        @foreach ($post->tags as $tag)
                        <span class="badge bg-secondary">{{ $tag->name }}</span>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>
        @endforeach

        <div class="row">
            <div class="col-md-12 text-center ">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div> 
    </div>
</div>


@endsection