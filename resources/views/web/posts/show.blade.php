@extends('web.layouts.main')
@section('styles')
    <link href="/css/welcome.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
    <div class="card bg-light ">
        <div class="card-body text-right ">
            <img src="{{$post->thumbnail}}?{{time()}}" alt="not found" class="img-fluid show-img">
            <p class="card-title font-weight-bold">{{$post->title}} </p>
            <p class="card-text font-small text-justify">{{$post->body}} </p>
            <div class="post-detail mt-5">
                <div class="font-small text-info">نوشته شده توسط م.خ منتشر شده در
                    <span class="reverse" id="reverse">{{$shamsiYear}}/{{$shamsiMonth}}/{{$shamsiDay}}</span>
                </div>
            </div>
            <div>
                <p class="text-primary">مطالب مرتبط</p>
                <ul>
                    @if(count($relatedPosts)==0)
                        <p class="red text-white p-1 text-right font-small">هيچ مطلب مرتبطي وجود ندارد</p>
                    @else
                        @foreach($relatedPosts as $relatedPost)
                            <li><a href="/posts/{{$relatedPost->id}}/show" class="text-info">{{$relatedPost->title}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
