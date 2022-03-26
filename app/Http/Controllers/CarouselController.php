<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.carousel.main', compact('carousels'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Carousel $carousel)
    {
        //
    }

    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        $request->validate([
            'image' => ['required', 'image']
        ]);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($carousel->url)) {
                Storage::disk('public')->delete($carousel->url);
            }
            $image = Storage::disk('public')->put('images', $request->image);
            $carousel->url = $image;
        }
        $carousel->save();
        return redirect()->route('carousel.index');
    }

    public function destroy(Carousel $carousel)
    {
        //
    }

    public function affichage()
    {
        $carouselAll = Carousel::all();
        return view("admin.carousel.main", compact("carouselAll"));
    }
}
