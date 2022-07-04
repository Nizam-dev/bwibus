<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'pt_po',
        'plat_nomor',
        'masa_berlaku_kir',
        'masa_berlaku_trayek',
        'user_id',
        'jalur',
    ];

 
}