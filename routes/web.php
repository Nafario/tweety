<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\TweetLikesController;
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
    return view('welcome');
});
Auth::routes();
Route::post('/tweets', [TweetController::class, 'store']);
Route::get('/tweets', [TweetController::class, 'index'])->name('home');
Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');
Route::patch('/profiles/{user:username}',[ProfilesController::class, 'update'])->middleware('can:edit,user');
Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');
Route::post('/profiles/{user:username}/follow', [FollowController::class, 'store']);
Route::get('/explore', [ExploreController::class, 'index'])->middleware('auth');
Route::post('/tweets/{tweet}/like', [TweetLikesController::class, 'store'])->middleware('auth');
Route::delete('/tweets/{tweet}/like', [TweetLikesController::class, 'destroy'])->middleware('auth');
