<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\categorieArticle;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function affichage(){

        $blog = Article::all();
        return view("admin.blog.main",compact("blog"));
    }

    public function create(){
        $categorieArticle = categorieArticle::all();
        $tag = Tag::all();
        return view('admin.blog.create',compact("categorieArticle","tag"));

    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'img' => 'required',
            'description' => 'required',
            'auteur' => 'required',
            'creation' => 'required',
        ]);

        $article=new Article();
        $article->title=$request->title;
        // $categorie->img=$request->img;
        $article->description=$request->description;
        $article->auteur=$request->auteur;
        $article->creation=$request->creation;

        if ($request->img) {
            $request->file('img')->storePublicly('images/','public');
            $article->img = $request->file('img')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/'.$token , $fichierURL);
            $article->img = $token;
        }

        $article->categorie_article_id = $request->categorie_article_id;

        $article->save();
        $article->tags()->attach($request->tag);
        return redirect()->route('blog.index')->with('success', 'Une nouvelle categorie ajoutée !');
    }
}
