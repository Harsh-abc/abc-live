<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs,slug',
            'content' => 'required',
            'seo_url' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
            $data['image'] = $imagePath;
        }

        $data['slug'] = Str::slug($request->title);
        Blog::create($data);
        return redirect()->route('admin.blog.index');
    }

    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Blog::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $id,
            'content' => 'required',
            'seo_url' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
            $data['image'] = $imagePath;
        }

        $post->update($data);
        return redirect()->route('admin.blog.index');
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('admin.blog.index');
    }

    public function publicIndex()
    {
        $posts = Blog::latest()->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
