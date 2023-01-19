<?php

namespace App\Http\Controllers\Shopper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelarsController extends Controller
{
    //

    public function index()
    {
        return view("shopper.travelars.travelers-list");
    }

}
