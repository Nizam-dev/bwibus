<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi_bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'longitude',
        'latitude',
        'bus_id',
    ];
}
