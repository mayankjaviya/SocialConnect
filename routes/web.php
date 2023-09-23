<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/welcome', function () {
   return Inertia::render('Welcome');
})->name('home');

Route::group(['middleware' => 'auth'],function (){
    Route::get('/',[PostController::class,'feed'])->name('feed.index');
    Route::get('/profile',[PostController::class,'myProfile'])->name('my-profile.index');
    Route::get('/profile',[PostController::class,'myProfile'])->name('my-profile.index');
    Route::get('/new-post',[PostController::class,'myNewPost'])->name('posts.create');
    Route::post('/new-post',[PostController::class,'storeNewPost'])->name('posts.store');
});



Route::post('login',function (Request $request){
    $user = User::find($request->get('id'));
    Auth::login($user);

    return to_route('my-profile.index');
})->name('login');
