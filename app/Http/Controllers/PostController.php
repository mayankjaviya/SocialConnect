<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostLike;
use App\Models\UserFollow;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PostController extends Controller
{

    public function feed(){
        $posts = Post::with('user')
        ->withCount(['likes' => function($query){
                $query->where('like',true);
            }])
        ->orderBy('id','desc')
        ->get()
        ->toArray();

        return Inertia::render('Feed/Feed',['posts' => $posts]);
    }

    public function myProfile(){
        $posts = Post::with('user')->withCount(['likes' => function($query){
            $query->where('like',true);
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

    public function myNewPost(){

        return Inertia::render('CreatePost/CreatePost');
    }

    public function storeNewPost(Request $request){
        $input = $request->all();
        $post = Post::create([
            'caption' => $input['caption'],
            'user_id' => Auth::id(),
        ]);

        $post->addMedia($input['image'])->toMediaCollection(Post::POST_COLLECTION);

        return to_route('my-profile.index');
    }

    public function likePost(Request $request){
        $input = $request->all();

        PostLike::updateOrCreate(
            [
                'post_id' => $input['post_id'],
                'user_id' => Auth::id()
            ],[
                'like' => $input['like'],
            ]
        );

        return redirect()->back();
    }
}
