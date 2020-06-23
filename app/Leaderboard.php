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
        
        // Sort array by number of points
        usort($array[0], function($a, $b) {
            return $b["total_points"] <=> $a["total_points"];
        });
        
        $rankCount = 1;
        $currentPoints = $array[0][0]["total_points"];
        
        foreach($array[0] as &$arr)
        {
            if ($rankCount > 3 && $currentPoints > $arr["total_points"])
            {
                $rankCount += 1;
            }
            else if ($currentPoints > $arr["total_points"] && $rankCount < 4)
            {
                $rankCount += 1;
            }
            array_unshift($arr, $rankCount);
            $currentPoints = $arr["total_points"];
        }

        return $array;
    }





}
