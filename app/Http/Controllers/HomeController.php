<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $date = Carbon::now();
        $posts = Post::where('published', true)
            ->where('published_at', '<=', $date)
            ->latest('published_at')->paginate(10);
        return view('web.welcome')->with([
            'posts' => $posts,
        ]);
    }

    public function show($id)
    {
        $posts = Post::where('category_id', $id)->paginate(10);
        $count = Post::where('category_id', $id)->count();

        return view('web.category')->with([
            'posts' => $posts,
            'count' => $count,
        ]);
    }
}