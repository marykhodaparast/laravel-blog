@extends('admin.layouts.main')
@section('styles')
    <link href="/css/welcome.css" rel="stylesheet" type="text/css">
@endsection
@include('admin.layouts.navbar_edit_create')
@section('content')

    <div class="card bg-light cart text-right">
        <div class="card-body ">
            <img src="/images/lap.jpg" alt="not-found" class="edit-image">
            <p class="card-title font-weight-bold">{{$post->title}} </p>
            <p class="card-text">{{$post->body}} </p>
        </div>
    </div>

@endsection