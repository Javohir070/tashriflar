<?php

namespace App\Http\Controllers;

use App\Models\Tashrif;
use Illuminate\Http\Request;

class TashrifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tashrif::created([
            "fish" => $request->fish,
            "tashkilot" => $request->tashkilot,
            "jinsi" => $request->jinsi,
            "maqsad" => $request->maqsad,
            "sana" => $request->sana,
            "sabab" => $request->sabab,
            "image" => $request->image,
        ]);

        return redirect()->back()->with('status','');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tashrif $tashrif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tashrif $tashrif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tashrif $tashrif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tashrif $tashrif)
    {
        //
    }
}
