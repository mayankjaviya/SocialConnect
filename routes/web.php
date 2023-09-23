<?php

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

Route::get('/', function () {
   return Inertia::render('Welcome');
})->name('home');

Route::group(['middleware' => 'auth'],function (){
    Route::get('/profile', function () {
        return Inertia::render('Profile/Profile');
    })->name('profile');
});


Route::post('login',function (Request $request){
    $user = User::find($request->get('id'));
    Auth::login($user);

    return to_route('home');
})->name('login');
