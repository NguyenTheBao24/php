@extends('layout')

@section('content')
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Quay lại</a>
    </div>
@endsection
