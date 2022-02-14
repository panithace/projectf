<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title' , 'slug' , 'body'];
    use HasFactory;


        public function getRouteKeyName() {
        return 'slug';

    }
}