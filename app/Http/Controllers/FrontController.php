<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Carousel;
use App\Models\categorieArticle;
use App\Models\categorieRoom;
use App\Models\Comment;
use App\Models\FeatureRoom;
use App\Models\Image;
use App\Models\Info;
use App\Models\Review;
use App\Models\Room;
use App\Models\Service;
use App\Models\Tag;
use App\Models\tagRoom;
use App\Models\Team;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $serviceAll =Service::all();
        $categories = categorieRoom::all();
        $roomAll = Room::all();
        $imageAll = Image::all();
        $blogAll = Article::all();
        $infoAll = Info::first();
        $video = Video::first();
        $carousel = Carousel::all();
        $comments = Comment::inRandomOrder()->take(9)->get();


        return view("home",compact("serviceAll", "roomAll", "imageAll", "blogAll", "infoAll", "video", "carousel", 'comments',"categories"));
    }

    public function room(){

        return view("room");
    }

    public function roomList(){
        $tagRoom = tagRoom::all();
        $categoryRoom = categorieRoom::all();
        $roomListAll = Room::orderBy("created_at","desc")->paginate(2);

        return view("roomList",compact("roomListAll", "tagRoom", "categoryRoom"));
    }
    public function tagRooms($id)
    {
        // $roomListAll = Room::all();
        $roomListAll = Room::orderBy("created_at","desc")->paginate(2);


        $tagRoomsiD = tagRoom::find($id);
        $roomListAll = $tagRoomsiD->rooms()->paginate(2);
        // dd(count($room));
        $tagRoom = tagRoom::all();
        // $categoryRoom = categorieRoom::all();
        // $roomsLast = Room::latest()->take(3)->get();

        $categoryRoom = categorieRoom::all();

        // dd($projetTout);
        return view("pages.roomslist", compact("tagRoom", "roomListAll", "categoryRoom"));
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

        $infos = Info::first();

        return view("contact",compact("infos"));
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

    public function roomPost($id)
    {
        $room = Room::find($id);
        $features = FeatureRoom::where('room_id', $id)->where('statut_id', '!=', 3)->get();
        $categories= categorieRoom::all();
        $reviews = Review::where('room_id', $id)->get();

        return view("pages.room", compact("room", 'features','categories', 'reviews'));
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

    public function searchRoomCategorie($id)
    {

        $roomListAll = Room::where("categorie_room_id", $id)->paginate(2);
        $categoryRoom = categorieRoom::all();
        // dd($categoryRoomArticle);

        $tagRoom = tagRoom::all();

        return view("pages.roomslist", compact("roomListAll", "categoryRoom", "tagRoom"));
    }

    public function RoomSearch(Request $request)
    {

        $data = $request->data;
        $roomListAll = Room::where('titre', 'like', "%$data%")
            ->paginate(2);
        $categoryRoom = categorieRoom::all();
        $tagRoom = tagRoom::all();


        return view("pages.roomslist", compact("roomListAll", "categoryRoom", "tagRoom"));
    }

    public function reservationAvancer()
    {
        $categories = categorieRoom::all();
        return view("pages.bookingform", compact('categories'));
    }

    public function bookRoom()
    {
        $categories = categorieRoom::all();
        $offers = Room::inRandomOrder()->take(3)->get();
        return view("pages.bookingform", compact('categories', 'offers'));
    }

    public function videosAffiche()
    {
        $video = Video::first();
        return view("admin.video.index", compact("video"));
    }


}
