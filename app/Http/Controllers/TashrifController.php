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
        $request->validate([
            "fish" => 'required|max:255',
            "tashkilot" => 'required|max:600',
            "jinsi" => 'required|max:255',
            "email" => 'required|max:255',
            "maqsad" => 'required|max:1024',
            "sana" => 'required|max:255', 
            "image" => 'mimes:jpg,bmp,png|max:12*1024',
        ]);

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
            "email" => $request->email,
            "maqsad" => $request->maqsad,
            "sana" => $request->sana,
            "sabab" => $sabab_file ?? null,
            "image" => $image_file,
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
