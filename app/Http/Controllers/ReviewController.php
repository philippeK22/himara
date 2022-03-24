<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required'],
            'image' => ['required'],
            'description' => ['required'],
            'note' => ['required'],
        ]);

        $review = new Review();
        $review->nom = $request->nom;
        $review->location = $request->location;
        $review->description = $request->description;
        $review->note = $request->note;
        $review->save();

        return redirect()->route('review.index');
    }
    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        //
    }

    public function update(Request $request, Review $review)
    {
        //
    }

    public function destroy(Review $review)
    {
        //
    }

}
