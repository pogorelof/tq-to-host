<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KolyaskiController extends Controller
{
    public function index()
    {
        return view("kolyaski.index");
    }
}
