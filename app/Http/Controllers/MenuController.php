<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Page;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        $pages = Page::all();
        return view('admin.menu.index', ['menus' => $menus, 'pages' => $pages]);
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
    public function store(StoreMenuRequest $request)
    {
        Menu::create([
            "name" => $request->name,
            "page_id" => $request->page_id
        ]);

        return redirect("/menus");
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $pages = Page::all();
        $menus = Menu::all();
        return view('admin.menu.edit', ['menus' => $menus, 'menuId'=> $menu, 'pages' => $pages]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update([
            "name" => $request->name,
            "page_id" => $request->page_id
        ]);

        return redirect('/menus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        
        return redirect('/menus');
    }
}
