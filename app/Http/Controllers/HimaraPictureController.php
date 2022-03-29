<?php

namespace App\Http\Controllers;

use App\Models\HimaraPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HimaraPictureController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $Himara = HimaraPicture::all();
        return view('himara', compact('Himara'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(HimaraPicture $himaraPicture)
    {
        //
    }
    public function edit(HimaraPicture $himaraPicture)
    {
        return view('admin.himara.edit', compact('himaraPicture'));
    }

    public function update(Request $request, HimaraPicture $himaraPicture)
    {
        $request->validate([
            'url' => ['required']
        ]);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($himaraPicture->url)) {
                Storage::disk('public')->delete($himaraPicture->url);
            }
            $image = Storage::disk('public')->put('', $request->image);
            $himaraPicture->url = $image;
        }
        $himaraPicture->save();
        return redirect()->route('himaraPicture.index');
    }

}
