@extends('admin.layouts.main')
@include('admin.layouts.navbar_edit_create')
@section('content')
    <p class="text-success text-weight-bold text-right" id="add">ویرایش نام طبقه بندی</p>
    <form class="needs-validation" novalidate method="POST" action="{{route('category.update',['id'=>$category->id])}}">
        @csrf
        <div class="form-group text-right">
            <label for="name">نام:</label>
            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name='name' placeholder="category name" value="{{$category->name}}" required>
        </div>
        <button class="btn btn-success" type="submit">
            save
        </button>
    </form>
@endsection