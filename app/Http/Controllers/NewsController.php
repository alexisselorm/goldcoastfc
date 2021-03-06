<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    //
    public function all()
    {

        // return view('news',
        // ['news'=>News::all()]);
        return view('news.news',
        ['news'=>News::latest()->with('author')->simplePaginate(10)->withQueryString(),

        ]);
    }

    public function single_news(News $single_news)
    {
        return view('news.single_news',
        ['single_news'=>$single_news,

        ]);
    }
}
