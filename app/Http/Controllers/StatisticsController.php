<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function dashboard()
    {
       
        return view('welcome', ['logs' => cache('logs')]);
    }
}
