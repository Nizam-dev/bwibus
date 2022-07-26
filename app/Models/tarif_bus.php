<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarif_bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_id',
        'deskripsi_harga',
    ];
}
