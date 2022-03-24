<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->nom = $request->nom;
        $reservation->email= $request->email;
        $reservation->debut = $request->debut;
        $reservation->fin = $request->fin;
        $reservation->adult = $request->adult;
        $reservation->enfant= $request->enfant;
        $reservation->commentaire= $request->commentaire;
        $reservation->telephone= $request->telephone;
        $reservation->country= $request->country;
        $reservation->valide = false;
        $reservation->category_chambre_id = $request->category_chambre_id;
        $reservation->save();
    }
    public function update($id)
    {
        $reservation = Reservation::find($id);
        $reservation->valide = true;
        $reservation->save();
        return  redirect()->back();
    }
}
