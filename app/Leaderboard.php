<?php

namespace App;

use App\Imports\LeaderboardImport;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel;

class Leaderboard extends Model
{
    public static function importCSV($path)
    {
        $array = Excel::toArray(new LeaderboardImport, $path);  // path to file


        return $array;
    }





}
