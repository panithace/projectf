<?php

namespace App\Http\Controllers\Admin;


use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
    return view ('admin.article.index' , [
        'article' => Article::all()
      ]);
    }
    public function create()
    {
            return view('admin.article.create');
    }

    public function store(ArticleRequest $request)
    {
        $validate_data = $request->validated();
          
              Article::create([
              'title' => $validate_data['title'],
              'slug' => $validate_data['title'],
              'body' => $validate_data['body'],
              ]);
        
        return redirect('/admin/article/create');
    }
    public function edit($article)
        {
            return $article;

        return view('admin.article.edit' , [
            'article' => $article
    ]);
    }
    public function update(ArticleRequest $request,Article $article)
    {
        $validate_data = $request->validated();

        $article->update($validate_data);

        return back();
    }

    public function delete(Article $article) 
    {
        $article->delete();

        return back();
    }
}