@extends('admin.layouts.main')
@include('admin.layouts.navbar')
@section('content')
    <h1 class="text-center ">Categories</h1>
    @foreach($categories as $category)
        <div class="card mt-2 p-2 ">
            <div class="card-title">{{$category->name}}</div>
            <div class="card-body">
                <a href="categories/{{$category->id}}/edit" class="btn "><i class="fa fa-edit"></i></a>
                <a href="categories/{{$category->id}}/delete" class="btn "><i class="fa fa-trash"></i></a>
            </div>
        </div>

    @endforeach
@endsection