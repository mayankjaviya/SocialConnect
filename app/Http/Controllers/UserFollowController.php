<?php

namespace App\Http\Controllers;

use App\Models\UserFollow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFollowController extends Controller
{
    public function followUser(Request $request){
        $input = $request->all();
        if($input['follow'] == false){
            $userFollow = UserFollow::where('follow_to',$input['user_id'])
                ->where('followed_by',Auth::id())
                ->first();
            if($userFollow){
                $userFollow->delete();
            }
        } else {
            UserFollow::create([
                'follow_to' => $input['user_id'],
                'followed_by' => Auth::id(),
            ]);
        }

        return redirect()->back();
    }
}
