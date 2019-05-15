<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with([
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
        ]);
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();
        return redirect(route('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit')->with([
            'category' => $category
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
        ]);
        $category = Category::findOrFail($id);
        $category->update($request->only(['name']));
        return redirect(route('category'));
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('category'));
    }
}
