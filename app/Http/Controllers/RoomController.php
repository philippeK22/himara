<?php

namespace App\Http\Controllers;

use App\Models\categorieRoom;
use App\Models\Room;
use App\Models\tagRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function affichage()
    {
        $room = Room::all();
        return view("admin.room.main", compact("room"));
    }

    public function create()
    {
        if (count(Room::all()) >= 32) {
            return back();
        }
        $categorieRoom = categorieRoom::all();
        $tag = tagRoom::all();
        return view('admin.room.create',compact("categorieRoom","tag"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'img' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'litMax' => 'required',
            'personMax' => 'required',
        ]);

        $categorie = categorieRoom::find($request->category_room_id);
        if (count($categorie->rooms) >= 8) {
            return back();
        }


         // fk
        $room=new Room();
        $room->titre=$request->titre;
        // $categorie->img=$request->img;
        $room->description=$request->description;
        $room->prix=$request->prix;
        $room->litMax=$request->litMax;
        $room->personMax=$request->personMax;


        if ($request->img) {
            $request->file('img')->storePublicly('images/','public');
            $room->img = $request->file('img')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/'.$token , $fichierURL);
            $room->img = $token;
        }

        // dd($request);
        $room->category_room_id = $request->category_room_id;

        $room->save();

        $room->tag_Rooms()->attach($request->tag_Rooms);


        return redirect()->route('room.index')->with('success', 'Une nouvelle categorie ajoutée !');
    }
    public function edit(Room $rooms)
    {
        $categorieRoom = categorieRoom::all();
        $tag = tagRoom::all();
        return view("admin.room.edit",compact("rooms","categorieRoom","tag"));
    }

    public function update(Request $request, Room $rooms)
    {

        $request->validate([
            'titre' => 'required',
            'img' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'litMax' => 'required',
            'personMax' => 'required',
        ]);

        // $teams->img = $request->img;

        if ($request->img) {
            $request->file('img')->storePublicly('images/','public');
            $rooms->img = $request->file('img')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/'.$token , $fichierURL);
            $rooms->img = $token;
        }

        $rooms->titre = $request->titre;
        $rooms->description = $request->description;
        $rooms->prix = $request->prix;
        $rooms->litMax = $request->litMax;
        $rooms->personMax = $request->personMax;
        $rooms->save();
        return redirect()->route('room.index')->with('success', 'room ' . $request->titre .' modifiée !');
    }
    public function destroy($id)
    {
        // dd($image);
        $image = Room::find($id);
        // Storage
        $destination = "images/" . $image->img;
        Storage::disk("public")->delete($destination);
        $image->delete();
        return redirect()->back()->with('warning', 'article bien supprimé');
    }

}
