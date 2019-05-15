@extends('admin.layouts.main')
@include('admin.layouts.navbar')
@section('content')
    @include('admin.layouts.slideshow')
    <div id="left-bar">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="card bg-light" id="card-distance-from-top">
                        <div class="card-body text-right">
                            <img src="{{$post->thumbnail}}?{{time()}}" class="edit-image" alt="">
                            <h1 class="card-title">{{$post->title}}</h1>
                            <p class="card-text">{{mb_substr($post->body, 0, 184, 'utf-8')}}</p>
                            <a href="posts/{{$post->id}}/show" class="btn btn-primary">more details</a>
                            <div class="two">
                                <a href="posts/{{$post->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="posts/{{$post->id}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Pager -->
    <div id="bottom">
        {!! $posts->render() !!}
    </div>
@endsection