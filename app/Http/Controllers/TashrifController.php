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
        
        $tashriflar = Tashrif::all();
        return view('admin.tashrif.index',['tashriflar'=>$tashriflar]); 
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

        if($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $image_file = $request->file('image')->storeAs('post-photos', $name);
        }
        if($request->hasFile('sabab')){
            $name = $request->file('sabab')->getClientOriginalName();
            $sabab_file = $request->file('sabab')->storeAs('post-photos', $name);
        }
        Tashrif::create([
            "fish" => $request->fish,
            "tashkilot" => $request->tashkilot,
            "jinsi" => $request->jinsi,
            "maqsad" => $request->maqsad,
            "sana" => $request->sana,
            "sabab" => $sabab_file ?? null,
            "image" => $image_file ?? null,
        ]);

        return redirect()->back()->with('status',"Sizning Ma'lumotingiz ko'rib chiqish uchun yuborildi. ");
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
