<?php

use App\Models\News;
use App\Models\User;
use App\Models\Player;
use App\Models\Position;
use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Test MailChimp
Route::post('newsletter', NewsletterController::class);

Route::get('/', function () {
    
    return view('home',[
        'news'=>News::paginate(4)
    ]);
});
// Player Routes and Controllers
Route::get('/players', [PlayerController::class,'all']);
Route::get('players/{player:slug}',[PlayerController::class, 'showById']);

// News Routes and Controllers
Route::get('news', [NewsController::class,'all']);
Route::get('news/{single_news:slug}', [NewsController::class,'single_news']);
Route::post('news/{single_news:slug}/comments',[CommentController::class,'store']);


Route::get('history', function () {
    return view('history');
});

Route::get('positions/{position:slug}', function(Position $position){
    return view('players',[
        'players' => $position->players->load(['position'])
    ]);
});
Route::get('authors/{author:username}', function(User $author){
    return view('news.news',[
        'news'=>$author->news()->latest()->paginate(10)
    ]);
});

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::POST('sessions',[SessionsController::class,'store'])->middleware('guest');
Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');

Route::middleware(['auth', 'can:admin'])->group(function () {
    
// Same as all below 7 REST methods
//  Route::resource('admin/news', AdminNewsController::class)->except('show');

//  All 7 REST Methods
Route::get('admin/news', [AdminNewsController::class,'index']);
Route::get('admin/news/{single_news}/edit', [AdminNewsController::class,'edit']);
Route::patch('admin/news/{single_news}', [AdminNewsController::class,'update']);
Route::delete('admin/news/{single_news}', [AdminNewsController::class,'destroy']);
Route::get('admin/news/create', [AdminNewsController::class,'create']);
Route::post('admin/news', [AdminNewsController::class,'store']);
    
});