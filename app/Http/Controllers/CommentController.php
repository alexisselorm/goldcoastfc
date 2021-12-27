<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(News $single_news){
        request()->validate([
            'body'=>'required'
        ]);
        $single_news->comments()->create([
            'user_id'=>request()->user()->id,
            'body'=>request('body')
        ]);

        return back();

    }
}
