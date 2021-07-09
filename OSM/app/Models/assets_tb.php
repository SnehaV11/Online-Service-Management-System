<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assets_tb extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = ['pname','pdop','pava','ptotal','poriginalcost','psellingcost', ];
}
