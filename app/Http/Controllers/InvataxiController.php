<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvataxiController extends Controller
{
    public function index()
    {
        return view("invataxi.index");
    }
}
