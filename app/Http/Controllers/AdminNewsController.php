<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminNewsController extends Controller
{
    //
    public function create(){
        if(auth()->guest()){
            abort(403);
        }
        return view('admin.news.create');
    }

    public function store(){

        $attributes=$this->validateNews(new News());
        $attributes['user_id']=auth()->id();
        $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');

        // ddd(auth()->user()->username);


            News::create($attributes);
        return redirect('authors/'.auth()->user()->username)->with('success', 'Post created');
    }
    public function index(){
        return view('admin.news.index',[
            'news'=>News::latest()->paginate(50)
        ]);
    }

    public function edit(News $single_news){

        return view('admin.news.edit',[
            'single_news'=>$single_news
        ]);

    }
    public function update(News $single_news){
        $attributes=$this->validateNews($single_news);
        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        }
        $single_news->update($attributes);

        return back()->with('success','Post Updated!');
    }
    public function destroy(News $single_news){
        $single_news->delete();

        return back()->with('success','Post deleted. Grr');
    }
    protected function validateNews(?News $single_news = null): array
    {
        $single_news ??=  new News();
        return request()->validate([
            'title'=>'required',
            'thumbnail' =>$single_news->exists ?['image']:['required|image'],
            'slug'=> ['required', Rule::unique('news','slug')->ignore($single_news)],
            'excerpt' =>'required',
            'body' =>'required'
        ]);   
        
    }

}
