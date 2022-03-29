<?php

namespace App\Http\Controllers;

use App\Models\CategorieImage;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $imageAll=Image::all();

        return view("admin.gallery.main",compact("imageAll"));
    }

    public function create(){
        $categorieImage = CategorieImage::all();
        return view("admin.gallery.create",compact("categorieImage"));

    }

    public function store(Request $request){

        request()->validate([
            "nom" => ["required"],
        ]);

        $store = new  Image();
        $store->nom = $request->nom;
        if ($request->url) {
            $request->file('url')->storePublicly('images/','public');
            $store->url = $request->file('url')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/'.$token , $fichierURL);
            $store->url = $token;

        }
        $store->categorie_image_id = $request->categorie_image_id;

        $store->save();
        return redirect()->back()->with('success', $request->nom . ' bien ajouté !');

    }

    public function destroy(Image $image){

        // Storage
        $destination = "images/". $image->url;
        Storage::disk("public")->delete($destination);
        $image->delete();
        return redirect()->back()->with('warning', 'Image bien supprimé');


    }

}
