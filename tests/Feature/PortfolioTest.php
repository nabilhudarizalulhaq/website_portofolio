<?php

use App\Models\Portfolio;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('menampilkan halaman publik utama', function (string $route) {
    $this->get(route($route))->assertOk();
})->with(['landing', 'about.index', 'skills.index', 'portfolio.index', 'contact.index']);

it('menampilkan detail portfolio melalui route model binding', function () {
    $portfolio = Portfolio::create([
        'title' => 'Aplikasi Uji',
        'description' => 'Deskripsi proyek pengujian.',
        'tech_stack' => 'Flutter, Laravel',
    ]);

    $this->get(route('portfolio.show', $portfolio))
        ->assertOk()
        ->assertSee('Aplikasi Uji');
});
