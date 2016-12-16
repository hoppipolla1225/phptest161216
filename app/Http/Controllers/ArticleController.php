<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('article.index')->with(compact('articles'));
    }
    public function create(){
        return view('article.create');
    }
    public function store(Request $request){
        $data = $request->all();
        $article = new Article();
        if(empty($data['id'])){
            $article = new Article();
        }else{
            $article = Article::find($data);
        }
        var_dump($article);
        $article->title = $data["title"];
        $article->description = $data["description"];
        $article->body = $data["body"];
        $article->user_id = 1;
        $article->status = 1;
        //$article = Article::fill($data);
        $article->save();
        return redirect()->to('article/complete');
    }
    public function complete(){
        return view('article.complete');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('article.edit')->with(compact('article'));
    }

}
