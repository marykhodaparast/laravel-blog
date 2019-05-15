<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Morilog\Jalali\Jalalian;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.posts.index')->with([
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.show')->with([
            'post' => $post
        ]);
    }

    public function create()
    {
        $jDate = Jalalian::fromCarbon(Carbon::now());
        $year = $jDate->getYear();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create')->with([
            'year' => $year,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'body' => 'required',
            'photo' => 'nullable|file|mimes:jpeg,bmp,png',
        ]);
        $post = new Post();
//        $tag = new Tag();
//        $string = $request->input('tag');
////        $arr = explode('+', $string);
////        dd($arr);
        //$tag->save();
        $post->category_id = $request->get('cat');
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->created_at = Carbon::now();
        $post->published = $request->get('published', false);
        $shamsiYear = $request->get('year');
        $shamsiMonth = $request->get('month');
        $shamsiDay = $request->get('day');
        $miladiDate = \Morilog\Jalali\CalendarUtils::toGregorian($shamsiYear, $shamsiMonth, $shamsiDay);
        $string = implode('-', $miladiDate);
        if ($shamsiYear == '0' && $shamsiMonth == '0' && $shamsiDay == '0') {
            $post->published_at = $post->created_at;
        } else {
            $post->published_at = $string;
        }
        $post->save();
        // file
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $extention = $request->file('photo')->extension();
            if ($extention != 'jpeg') {
                $extention = 'jpeg';
            }
            $path = 'posts/' . $post->id;
            $photo->move($path, 'thumbnail.jpg');
        }
        session()->put('message', 'your post was created successfully');
        return redirect()->to(route('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $jDate = Jalalian::fromCarbon(Carbon::now());
        $year = $jDate->getYear();
        $categories = Category::all();
        $pid = $post->category_id;
        return view('admin.posts.edit')->with([
            'post' => $post,
            'year' => $year,
            'categories' => $categories,
            'pid' => $pid,
        ]);
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect(route('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'photo' => 'nullable|file|mimes:jpeg,bmp,png',
        ]);
        $post = Post::findOrFail($id);
        $post->published = $request->get('published', false);
        $post->category_id = $request->get('cat');
        $post->created_at = Carbon::now();
        $shamsiYear = $request->get('year');
        $shamsiMonth = $request->get('month');
        $shamsiDay = $request->get('day');
        $miladiDate = \Morilog\Jalali\CalendarUtils::toGregorian($shamsiYear, $shamsiMonth, $shamsiDay);
        $string = implode('-', $miladiDate);
        if ($shamsiYear == '0' && $shamsiMonth == '0' && $shamsiDay == '0') {
            $post->published_at = $post->created_at;
        } else {
            $post->published_at = $string;
        }
        $post->update($request->only(['title', 'body', 'category_id']));
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $extention = $request->file('photo')->extension();
            if ($extention != 'jpeg') {
                $extention = 'jpeg';
            }
            $path = 'posts/' . $id;
            Storage::delete('/posts/' . $id . '/thumbnail.jpg');
            $photo->move($path, 'thumbnail.jpg');
        }
        return redirect(route('post'))->with([
            'message' => 'successfully updated.'
        ]);
    }
}