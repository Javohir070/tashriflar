<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $page = Page::where('slug','home')->get();
        $menu = new Menu();

        return view('frontend.home', [
            // 'page' => $page[0],
            'menu' => $menu,
            'id' => 1,
        ]);
    }

    public function views($id, Page $page, Menu $menu){

        return view('frontend.page', compact(['page','menu','id']));
    }
}
