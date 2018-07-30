<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        'method', 'temperature', 'cloudness', 'wind', 'wind_speed', 'pressure', 'humanity', 'temperature_water',
    ];
}
