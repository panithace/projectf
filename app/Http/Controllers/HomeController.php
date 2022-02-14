<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Article;

class HomeController extends Controller
{
    //
    public function home() {
    $articles = Article::orderBy('id')->get();
    return view('index');
    }

    public function about() {
        return view('about');
    }
}
