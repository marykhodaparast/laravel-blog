@extends('admin.layouts.main')
@include('admin.layouts.navbar_edit_create')

@section('content')
    <p class="text-success text-right font-weight-bold" id="add">اضافه کردن مطلب</p>
    <form class="needs-validation" novalidate method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group text-right">
            <label for="title">عنوان:</label>
            <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name='title' placeholder="عنوان" value="{{old('title')}}" required>
            @include('admin.layouts.titleError')
        </div>
        <div class="form-group text-right">
            <label for="body">بدنه:</label>
            <textarea type="text" cols="5" rows="5" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" id="body" name="body" placeholder="بدنه" required>{{old('body')}}</textarea>
            @include('admin.layouts.bodyError')
        </div>
        <div class="form-group">
            <select name="year" id="year" class="browser-default custom-select">
                <option value="0" selected>سال</option>
                <option value="{{$year}}">{{$year}}</option>
                <option value="{{$year+1}}">{{$year+1}}</option>
                <option value="{{$year+2}}">{{$year+2}}</option>
                <option value="{{$year+3}}">{{$year+3}}</option>
                <option value="{{$year+4}}">{{$year+4}}</option>
                <option value="{{$year+5}}">{{$year+5}}</option>
            </select>
            <select class="browser-default custom-select" name="month" id="month">
                <option value="0" selected>ماه</option>
                <option value="1">فروردین</option>
                <option value="2">اردیبهشت</option>
                <option value="3">خرداد</option>
                <option value="4">تیر</option>
                <option value="5">مرداد</option>
                <option value="6">شهریور</option>
                <option value="7">مهر</option>
                <option value="8">آبان</option>
                <option value="9">آذر</option>
                <option value="10">دی</option>
                <option value="11">بهمن</option>
                <option value="12">اسفند</option>
            </select>
            <select class="browser-default custom-select" name="day" id="day">
                <option value="0">روز</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input {{$errors->has('photo') ? 'is-invalid' : ''}}" name="photo" id="photo" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="photo">Choose file</label>
                @include('admin.layouts.fileError')
            </div>
        </div>
        <p class="font-weight-bold text-right">طبقه بندي ها</p>
        <div class="form-group">
            <select name="cat" id="cat" class="browser-default custom-select">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group label-input text-right">
            <label class="checkbox-inline" for="published"><input type="checkbox" value="1" name="published">published</label>
        </div>
            <button class="btn btn-success" type="submit">
                save
            </button>
    </form>
@endsection
