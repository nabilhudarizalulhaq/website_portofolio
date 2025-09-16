<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
     use HasFactory;

    /**
     * Kolom yang bisa diisi secara mass assignment.
     */
    protected $fillable = [
        'title',
        'path',
    ];
}
