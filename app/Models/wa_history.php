<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wa_history extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'last_chat',
    ];
}
