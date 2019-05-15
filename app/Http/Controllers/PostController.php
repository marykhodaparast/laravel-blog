<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Routing\Controller;
use Morilog\Jalali\Jalalian;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $shyear = \Morilog\Jalali\CalendarUtils::strftime('Y', strtotime($post->published_at));
        $shamsiYear = \Morilog\Jalali\CalendarUtils::convertNumbers($shyear);
        $shmonth=\Morilog\Jalali\CalendarUtils::strftime('m', strtotime($post->published_at));
        $shamsiMonth=\Morilog\Jalali\CalendarUtils::convertNumbers($shmonth);
        $shday=\Morilog\Jalali\CalendarUtils::strftime('d', strtotime($post->published_at));
        $shamsiDay=\Morilog\Jalali\CalendarUtils::convertNumbers($shday);
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('published', true)
            ->where('id', '!=', $id)
            ->get();
        return view('web.posts.show')->with([
            'post' => $post,
            'shamsiYear' => $shamsiYear,
            'shamsiMonth'=>$shamsiMonth,
            'shamsiDay'=>$shamsiDay,
            'relatedPosts' => $relatedPosts
        ]);
    }
}