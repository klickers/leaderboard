<?php

namespace App\Imports;

use App\Leaderboard;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeaderboardImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $array =  new Leaderboard([
            'name'     => $row[0],
            'username' => $row[1],
            'email'    => $row[2],
            'points'   => $row[3],
        ]);



        return $array->sortBy('points');
    }

    public function batchSize(): int
    {
        return 10;
    }
}
