<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    public function run(): void
    {
        Photo::create([
            'title' => 'Foto Profil',
            'path'  => 'photos/example.jpg', // simpan di storage/app/public/photos
        ]);
    }
}
