<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Train;


class PageController extends Controller
{
    public function index(){
        // $trains = Train::all()->where('trip_date', '=', '2023-01-18');
        $trains = Train::all();
        return view('main', compact('trains'));
    }
}

// Carbon::today()
