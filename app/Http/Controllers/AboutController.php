<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();

        return view("admin.about.index", ["abouts" => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.about.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::create([
            "title" => [
                "uz" => $request->title_uz,
                "ru" => $request->title_ru,
            ],
            "body" => [
                "uz" => $request->body_uz,
                "ru" => "usevh tarjima kerak 123434",
            ],
            "image" => "logo.phg"
        ]);

        return redirect()->route('abouts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', ['about'=>$about]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $about->update([
            "title" => [
                "uz" => $request->title_uz,
                "ru" => $request->title_ru,
            ],
            "body" => [
                "uz" => $request->body_uz,
                "ru" => "usevh tarjima kerak 123434",
            ],
            "image" => "rasm.phg"
        ]);
        
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
