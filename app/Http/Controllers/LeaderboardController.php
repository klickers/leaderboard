<?php

namespace App\Http\Controllers;

use App\Leaderboard;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LeaderboardController extends Controller
{

    public function index() 
    {
        $array = Leaderboard::importCSV(public_path('data/data.csv'));
        
        return view('index', [
            'array' => $array,
        ]);
    }
    
}
