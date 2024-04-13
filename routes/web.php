<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserFollowController;
use App\Models\User;
use App\Models\UserFollow;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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

Route::get('/login', function () {
   return Inertia::render('Login');
})->name('home');

Route::get('/register', function () {
   return Inertia::render('Register');
})->name('register');

Route::group(['middleware' => 'auth'],function (){
    Route::get('/profile',[ProfileController::class,'myProfile'])->name('my-profile.index');

    Route::get('/',[PostController::class,'feed'])->name('feed.index');

    Route::get('/new-post',[PostController::class,'myNewPost'])->name('posts.create');
    Route::post('/new-post',[PostController::class,'storeNewPost'])->name('posts.store');
    Route::post('/like-post',[PostController::class,'likePost'])->name('posts.like');

    Route::post('/follow',[UserFollowController::class,'followUser'])->name('users.follow');
});



Route::post('login',[ProfileController::class,'login'])->name('login');


Route::post('register',function (Request $request){
    $input = $request->all();

    $request->validate([
        'name' => 'required',
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|same:password_confirmation'
    ]);

    $createdUser = User::create([
        'name' => $input['name'],
        'username' => $input['username'],
        'email' => $input['email'],
        'password' => bcrypt($input['password'])
    ]);

    $image = Arr::random(getRandomProfileImage());

    $createdUser->addMediaFromUrl($image)->toMediaCollection(User::USER_PROFILE_IMAGE);

    UserFollow::Create(['followed_by' => $createdUser->id,'follow_to'=>1]);

    Auth::login($createdUser);

    return to_route('my-profile.index');
});

Route::get('edit-profile',[ProfileController::class,'editProfile'])->name('profile.edit');
Route::post('edit-profile',[ProfileController::class,'updateProfile'])->name('profile.update');

Route::post('logout',[ProfileController::class,'logout'])->name('logout');
