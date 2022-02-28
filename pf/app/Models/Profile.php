<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CommentsController;

class Profile extends Model
{
    use HasFactory;
    protected  $fillable = [
        'Personal_Description',
        //'Skills',
        'first_name',
        'last_name',
    ];
    public function profileImage(){
        $imagePath = ($this->image) ?  $this->image : 'profile/HFWa1wlFg68gTkq7v8naw5CQr7fjJz3P0q9z3L5m.png';
        return '/storage/' . $imagePath;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function skills(){
        return $this->morphToMany(Skill::class, 'taggable');
    }
   
}

