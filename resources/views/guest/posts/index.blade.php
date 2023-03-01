@extends('layouts.admin')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="card m-4">
                <div class="card-header">
                    {{ $post->author }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <div class="card-footer text-muted">{{ $post->post_date }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
