<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Validation\Rule;

class AdminNewsController extends Controller
{
    //
    public function create()
    {
        if (auth()->guest()) {
            abort(403);
        }

        return view('admin.news.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title'=>'required',
            'thumbnail' =>'required|image',
            'slug'=> ['required', Rule::unique('news', 'slug')],
            'excerpt' =>'required',
            'body' =>'required',
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        // ddd(auth()->user()->username);

        News::create($attributes);

        return redirect('authors/'.auth()->user()->username)->with('success', 'Post created');
    }

    public function index()
    {
        return view('admin.news.index', [
            'news'=>News::latest()->where('user_id', auth()->user()->id)->paginate(50),
        ]);
    }

    public function edit(News $single_news)
    {
        return view('admin.news.edit', [
            'single_news'=>$single_news,
        ]);
    }

    public function update(News $single_news)
    {
        $attributes = request()->validate([
            'title'=>'required',
            'thumbnail' =>'image',
            'slug'=> ['required', Rule::unique('news', 'slug')->ignore($single_news->id)],
            'excerpt' =>'required',
            'body' =>'required',
        ]);
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $single_news->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(News $single_news)
    {
        $single_news->delete();

        return back()->with('success', 'Post deleted. Grr');
    }
}
