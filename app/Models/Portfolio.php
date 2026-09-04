<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'images',
        'link',
        'tech_stack',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
