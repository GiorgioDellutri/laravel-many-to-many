@extends('layouts.admin')

@section('content')
    <div class="container">

        @if (session('message'))
            <div class="alert alert-{{ session('message_class') }}">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-warning my-2 mx-2" href="{{ route('admin.post.create') }}">Create a new project</a>
            </div>
        </div>
        <table class="table table-hover">
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Post date</th>
                <th class="text-center" scope="col">Utilities</th>
            </tr>
            </thead>
            @foreach ($posts as $post)
                <tbody>
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->post_date }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.post.show', $post->id) }}" class="btn btn-sm btn-success ">Show</a>
                            <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-sm btn-dark mx-2">Edit</a>

                            <form class="d-inline" action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        {{ $posts->links() }}
    </div>
@endsection
