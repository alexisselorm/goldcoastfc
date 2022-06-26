<?php

namespace App\Http\Controllers;

use App\Models\News;

class CommentController extends Controller
{
    //
    /**
     * Undocumented function
     *
     * @param  News  $single_news
     * @return void
     */
    public function store(News $single_news)
    {
        request()->validate([
            'body' => 'required',
        ]);
        $single_news->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body'),
        ]);

        return back();
    }
}
