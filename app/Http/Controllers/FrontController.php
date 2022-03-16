<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){

        return view("home");
    }

    public function room(){

        return view("room");
    }

    public function roomList(){

        return view("roomList");
    }

    public function staff(){

        return view("staff");
    }

    public function gallery(){

        return view("gallery");
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

    public function blogPost(){
        

        return view("blogPost");
    }











}
