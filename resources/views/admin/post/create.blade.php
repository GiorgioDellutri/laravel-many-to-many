@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        @include('admin.partials.editCreate', ['methods' => '', 'routeName' => 'admin.post.store'])
    </div>
@endsection
