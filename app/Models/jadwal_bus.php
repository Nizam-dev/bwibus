<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_id',
        'deskripsi_jadwal',
    ];
}
