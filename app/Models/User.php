<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable ,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'bio',
        'password',
    ];

    const USER_PROFILE_IMAGE = 'user_profile';

    protected $appends = ['user_profile','is_followed'];

    public function getUserProfileAttribute(){
        /** @var Media $media */
        $media = $this->getMedia(self::USER_PROFILE_IMAGE)->first();
        if (!empty($media)) {
            return $media->getFullUrl();
        }

        return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4SNAvnBy0lETUNyqIqpec2JosTf0Y2zLL4A&usqp=CAU';
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function follower(){
        return $this->hasMany(UserFollow::class,'follow_to');
    }

    public function following(){
        return $this->hasMany(UserFollow::class,'followed_by');
    }

    public function getIsFollowedAttribute(){
        return UserFollow::where('follow_to',$this->id)->where('followed_by',Auth::id())->exists();
    }
}
