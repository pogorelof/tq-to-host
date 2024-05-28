<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenqogamController extends Controller
{
    public function index()
    {
        return view("tenqogam.index");
    }
}
