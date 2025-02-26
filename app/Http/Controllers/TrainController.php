<?php

namespace App\Http\Controllers;

use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;



class TrainController extends Controller
{
    public function index()
    {
        $date = new DateTime('now');
        $trains = Train::where('date', '>=', $date)->orderBy('date', 'asc')->get();
        return view('home', compact('trains'));
    }
}
