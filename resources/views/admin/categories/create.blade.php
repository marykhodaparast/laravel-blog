@extends('admin.layouts.main')
@include('admin.layouts.navbar_edit_create')
@section('content')
    <p class="text-success text-right font-weight-bold" id="add">اضافه کردن یک طبقه بندی:</p>
    <form class="needs-validation" novalidate method="POST" action="{{route('category.store')}}">
        @csrf
        <div class="form-group text-right">
            <label for="name">نام:</label>
            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name='name' placeholder="نام طبقه بندی" value="{{old('name')}}" required>
            @include('admin.layouts.nameError')
        </div>
        <button class="btn btn-success" type="submit">
            save
        </button>
    </form>


@endsection