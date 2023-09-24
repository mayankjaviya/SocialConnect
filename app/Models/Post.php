<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'caption',
        'user_id',
    ];

    const POST_COLLECTION = 'post_collection';

    protected $appends = ['post_image','is_liked'];

    public function getPostImageAttribute(){
        /** @var Media $media */
        $media = $this->getMedia(self::POST_COLLECTION)->first();
        if (!empty($media)) {
            return $media->getFullUrl();
        }

        return 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4SNAvnBy0lETUNyqIqpec2JosTf0Y2zLL4A&usqp=CAU';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(PostLike::class);
    }

    public function getIsLikedAttribute(){
        return $this->likes()->where('user_id', Auth::id())->where('like',true)->exists();
    }
}
