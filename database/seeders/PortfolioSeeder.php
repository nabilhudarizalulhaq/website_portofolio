<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'POS System for SMEs',
            'description' => 'A POS system built with Laravel and Tailwind CSS.',
            'image' => 'portfolios/sample1.jpg', // simpan gambar di storage/app/public/portfolios
            'link' => 'https://github.com/your-repo',
            'tech_stack' => 'Laravel, TailwindCSS',
        ]);

        Portfolio::create([
            'title' => 'E-Commerce Platform',
            'description' => 'An eCommerce platform powered by Laravel and Vue.js.',
            'image' => 'portfolios/sample2.jpg',
            'link' => 'https://github.com/your-repo',
            'tech_stack' => 'Laravel, Vue.js',
        ]);

        Portfolio::create([
            'title' => 'Mobile App Booking',
            'description' => 'A Flutter mobile app for booking restaurants.',
            'image' => 'portfolios/sample3.jpg',
            'link' => 'https://github.com/your-repo',
            'tech_stack' => 'Flutter, Firebase',
            
        ]);

        $this->call([
            PortfolioSeeder::class,
        ]);
    }
}
