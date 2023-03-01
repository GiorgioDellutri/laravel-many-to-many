@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        @include('admin.partials.editCreate', ['methods' => 'PUT', 'routeName' => 'admin.post.update'])
    </div>
@endsection
