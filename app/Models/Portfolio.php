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
        'image',       // thumbnail utama
        'images',      // gallery (json)
        'link',
        'tech_stack',
    ];

    protected $casts = [
        'images' => 'array', // otomatis cast ke array
    ];

    public function portfolio()
{
    return $this->belongsTo(Portfolio::class);
}
}
