<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAction extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'action_type',
        'action_value'
    ];
}
