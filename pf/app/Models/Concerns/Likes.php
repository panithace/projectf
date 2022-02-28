<?php
namespace App\Models\Concerns;


use App\Models\Like;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Http\Controllers\LikeController;

trait Likes
{
    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}