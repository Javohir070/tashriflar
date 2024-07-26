<?php

namespace App\Http\Controllers;

use App\Models\SubMenu;
use App\Http\Requests\StoreSubMenuRequest;
use App\Http\Requests\UpdateSubMenuRequest;
use App\Models\Menu;
use App\Models\Page;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        $pages = Page::all();
        return view('admin.submenu.index', ['menus' => $menus, 'pages' => $pages]);
        
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
    public function store(StoreSubMenuRequest $request)
    {

        SubMenu::create($request->toArray());

        return redirect('/menus');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubMenu $submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubMenu $submenu)
    {
        $menus = Menu::all();
        $pages = Page::all();
        return view('admin.submenu.edit', ['menus' => $menus,'submenuId'=>$submenu, 'pages' => $pages]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubMenuRequest $request, SubMenu $submenu)
    {
    
        $submenu->update($request->toArray());

        return redirect("/menus");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubMenu $submenu)
    {
        $submenu->delete();

        return redirect('/menus');
    }
}
