<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CommentsController;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Concerns\Likes;
use App\Contracts\Likeable;
use App\Http\Controllers\LikeController;

class Post extends Model implements Likeable
{
    use HasFactory, Likes;
    protected $guarded = [];

public function user(){
    return $this->belongsTo(User::class);
}
public function comments() {
    return $this->hasMany(Comment::class);
}

}
