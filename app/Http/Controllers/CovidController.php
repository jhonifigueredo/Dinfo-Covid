<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function Index()
    {
        return view('covid.index');
    }
}
