<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Profile;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function home (Request $request) {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $posts = Post::where('title','LIKE', "%$search%")->orWhere('body', 'LIKE', "%$search%")->get();
        } else {
            $posts = Post::all();
        }
        $data = compact('posts', 'search');
        return view('home')->with($data);
    }

    public function index(Post $post) 
    {
        return view ('index', [
        'index' => Post::latest()->get()]);
    }
    

    //public function index()
    //{
       //Post::orderBy('created_at', 'desc')->get();
       //return view('home.index')->with($posts);
 
        //return view('home.index', ['posts' => $posts]);
    //}

    
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //public function index()
    //{
      //  return view('home');
    //}
}
