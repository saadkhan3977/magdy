<?php

namespace App\Http\Controllers\Travelar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

        function __construct()
        {
             $this->middleware('permission:travelar-dashboard', ['only' => ['index']]);
        }
    //
    public function index()
    {
       return view("travelar.dashboard");  
    }
}
