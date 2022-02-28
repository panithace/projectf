<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CommentsController;

class PostsController extends Controller
{
    //
    public function __construct() {
       $this->middleware('auth');
    }
    public function create() {
        return view('posts.create');
    }
    public function store() {

        $data = request()->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'body' => $data['body'],
        ]);
       
        return redirect('/profiles/' . auth()->user()->id);

    }
    public function show(\App\Models\Post $post){
            return view('posts.show', compact('post'));
    }
        
    }
