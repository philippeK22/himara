<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\categorieArticle;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $serviceAll =Service::all();

        return view("home",compact("serviceAll"));
    }

    public function room(){

        return view("room");
    }

    public function roomList(){

        return view("roomList");
    }

    public function staff(){
        $team = Team::all();
        $houseKeeper = Team::where("fonction_id",1)->first();

        return view("staff",compact("team","houseKeeper"));
    }

    public function gallery(){

        $imageAll= Image::all();

        return view("gallery",compact("imageAll"));
    }

    public function contact(){

        return view("contact");
    }

    public function styleGuide(){

        return view("styleGuide");
    }

    public function button(){

        return view("button");
    }

    public function icons(){

        return view("icons");
    }

    public function booking(){

        return view("booking");
    }

    public function blog(){
        $blog = Article::all();
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();
        return view("blog",compact("blog","tag","categoryArticle","blogLast"));

        return view("blog");
    }

    public function events()
    {
        return view("events");
    }

    public function eventdetails()
    {
        return view("eventdetails");
    }

    public function loading()
    {
        return view("loading");
    }

    public function page()
    {
        return view("page");
    }

    public function blogPost($id){

        $blog = Article::find($id);
        $comment = Comment::all();



        return view("blogPost",compact("blog","comment"));
    }

    public function searchCategorie($id){
        $blog = Article::where("categorie_article_id",$id)->get();
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();

        return view("blog",compact("blog","tag","categoryArticle","blogLast"));


    }


    public function tagCategorie($id){

        $tagiD = Tag::find($id);
        $blog = $tagiD->articles;
        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast = Article::latest()->take(3)->get();

        return view("blog",compact("blog","tag","categoryArticle","blogLast"));

    }

    public function admin(){


        return view("admin.dashboard");


    }

    public function search(Request $request){

        $data =$request->data;
        $blog= Article::where('title', 'like', "%$data%")
                 ->get();

        $tag = Tag::all();
        $categoryArticle = categorieArticle::all();
        $blogLast= Article::latest()->take(3)->get();

        return view("blog",compact("tag","categoryArticle","blogLast"));


    }













}
