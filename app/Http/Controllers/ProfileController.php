<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\UserFollow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProfileController extends Controller
{

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return to_route('my-profile.index');
        }

        return back()->withErrors('Invalid Email or Password');

    }

    public function logout(){
        Auth::logout();

        return to_route('home');
    }


    public function myProfile(){
        $posts = Post::with('user')->withCount(['likes' => function($query){
            $query->where('action_value',true);
        }])->where('user_id',Auth::id())->orderBy('id','desc')->get();
        $totalPosts = $posts->count();
        $totalFollowings = UserFollow::where('followed_by',Auth::id())->count();
        $totalFollowers = UserFollow::where('follow_to',Auth::id())->count();

        return Inertia::render('Profile/Profile',[
            'posts' => $posts,
            'totalPosts' => $totalPosts,
            'totalFollowers' => $totalFollowers,
            'totalFollowings' => $totalFollowings
        ]);
    }

    public function editProfile(){
        $user = Auth::User();

        return Inertia::render('Profile/EditProfile',compact('user'));
    }

    public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,'.Auth::id(),
            'email' => 'required|email|unique:users,email,'.Auth::id(),
            'bio' => 'required'
        ]);

        $user = User::find(Auth::id());
        $user->update($request->all());

        if($request->hasFile('profile')){
            $user->clearMediaCollection(User::USER_PROFILE_IMAGE);
            $user->addMediaFromRequest('profile')->toMediaCollection(User::USER_PROFILE_IMAGE);
        }

        return to_route('my-profile.index')->with('success','Profile Updated Successfully');
    }
}
