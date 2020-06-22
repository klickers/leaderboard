<?php

namespace App\Imports;

use App\Leaderboard;
use Maatwebsite\Excel\Concerns\ToModel;

class LeaderboardImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Leaderboard([
            'name'     => $row[0],
            'username' => $row[1],
            'email'    => $row[2],
            'points'   => $row[3],
        ]);
    }
}
