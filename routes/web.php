<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RegisterController;
use App\Models\News;
use App\Models\User;
use App\Models\Player;
use App\Models\Position;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    
    return view('home');
});
// Player Routes and Controllers
Route::get('/players', [PlayerController::class,'all']);
Route::get('players/{player:slug}',[PlayerController::class, 'showById']);

// News Routes and Controllers
Route::get('news', [NewsController::class,'all']);
Route::get('news/{single_news:slug}', [NewsController::class,'single_news']);



Route::get('history', function () {
    return view('history');
});

Route::get('positions/{position:slug}', function(Position $position){
    return view('players',[
        'players' => $position->players->load(['position'])
    ]);
});
Route::get('authors/{author:username}', function(User $author){
    return view('news',[
        'news'=>$author->news->load(['author'])
    ]);
});

Route::get('register',[RegisterController::class,'create']);
Route::post('register',[RegisterController::class,'store']);