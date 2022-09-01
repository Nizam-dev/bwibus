<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritiksaran extends Model
{
    use HasFactory;
    protected $fillable = ['kritiksaran','user_id'];
}
