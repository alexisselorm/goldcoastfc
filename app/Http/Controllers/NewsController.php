<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function all(){

        // return view('news', 
        // ['news'=>News::all()]);
        return view('news', 
        ['news'=>News::latest()->with('author')->simplePaginate(10)->withQueryString()
    
        ]);
    }

    public function single_news(News $single_news){
        return view('single_news', 
        ['single_news'=>$single_news
        
        ]);
    }
}
