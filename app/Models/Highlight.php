<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_show',
        'title',
        'content',
        'banner_path',
    ];

    protected $casts = [
        'is_show' => 'boolean',
    ];
}
