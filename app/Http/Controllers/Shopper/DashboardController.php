<?php

namespace App\Http\Controllers\Shopper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
    function __construct()
    {
         $this->middleware('permission:shopper-dashboard', ['only' => ['index']]);
    }
    public function index()
    {
        return view("shopper.dashboard"); 
    }
}
