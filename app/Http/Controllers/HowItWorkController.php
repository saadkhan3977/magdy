<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowItWorkController extends Controller
{
    public function index()
    {
        return view('how_it_work');
    }
}
