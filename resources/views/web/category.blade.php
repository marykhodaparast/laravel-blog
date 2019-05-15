@extends('web.layouts.main')
@section('content')
    <div class="row">
        @if($count==0)
            <div class="red card p-2 ml-3 text-right">هيچ مطلبي با اين طبقه بندي موجود نيست.</div>
        @else
            <div class="green card p-2  text-right ">{{$count}}مطلب با اين طبقه بندي موجود است.</div>
        @endif
        @foreach($posts as $post)
            <div class="container">
                <div class="card mt-4">
                    <div class="row no-gutters">
                        <div class="col-xs-5 col-lg-4 col-md-4 col-sm-4">
                            <a href="/posts/{{$post->id}}/show"><img src="{{$post->thumbnail}}?{{time()}}" class="img-fluid img-properties"></a>
                        </div>
                        <div class="col-xs-7 col-lg-8 col-md-8 col-sm-8">
                            <div class="card-block px-2 text-right ">
                                <a class="card-title title text-info" href="/posts/{{$post->id}}/show">{{$post->title}}</a>
                                <p class="card-text font-small text-justify">{{$post->body}}</p>
                            </div>
                            <div class="post-detail mt-3">
                                <div class=" font-small text-info mr-2 text-right">
                                    نوشته شده توسط م.خ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Pager -->
    <div class="pager bottom-page">
        {!! $posts->render() !!}
    </div>
@endsection