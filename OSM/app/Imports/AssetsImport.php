<?php

namespace App\Imports;

use App\Models\assets_tb;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AssetsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new assets_tb([
            
            'pname' => $row['pname'],
            'pdop' => $row['pdop'],
            'pava' => $row['pava'],
            'ptotal' => $row['ptotal'],
            'poriginalcost' => $row['poriginalcost'],
            'psellingcost' => $row['psellingcost'],

        ]);
    }
}
