<?php

namespace App\Http\Controllers\Insurance\Osago;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OsagoController extends Controller
{
    public function index()
    {
        return view('layouts.osagoapp');
    }
    public function create()
    {
        return view('insurance.osago.about.index');
    }
}
