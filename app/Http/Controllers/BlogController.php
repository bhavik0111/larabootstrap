<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', ['blogs' => $blogs]);
    }
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show', ['blog' => $blog]);
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        return redirect()->route('blog.index');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit', ['blog' => $blog]);
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        return redirect()->route('blog.show', ['id' => $blog->id]);
    }
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
