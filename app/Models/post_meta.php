<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_meta extends Model
{
    protected $fillable = [
        'title',
        'content',
        'post_type',
        'status',
    ];
    use HasFactory;
}
