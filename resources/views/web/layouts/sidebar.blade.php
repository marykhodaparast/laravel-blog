<div class="card mt-4">
    <div class="card-header text-black text-right">طبقه بندی ها</div>
    <div class="card-body">
        @foreach($categories as $category)
            <a href="/category/{{$category->id}}/show" class="text-info font-small">#{{$category->name}}</a>
        @endforeach
    </div>
</div>
<div class="card mt-4">
    <div class="card-header text-black text-right">تمام مطالب</div>
    <div class="card-body text-right">
        <a href="/" class="text-uppercase font-small">تمام مطالب</a>
    </div>
</div>



