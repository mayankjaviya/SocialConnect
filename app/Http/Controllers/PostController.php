<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PostController extends Controller
{

    public function feed(){
        $posts = Post::with('user')->orderBy('id','desc')->get();

        return Inertia::render('Feed/Feed',['posts' => $posts]);
    }

    public function myProfile(){
        $posts = Post::where('user_id',Auth::id())->get();
        return Inertia::render('Profile/Profile',['posts' => $posts,'posts_count' => $posts->count()]);
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
}
