<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_meta extends Model
{
    protected $fillable = [
        'user_id',
        'user_key',
        'user_value',
    ];

    use HasFactory;
}
