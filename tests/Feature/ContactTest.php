<?php

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('menyimpan pesan kontak yang valid', function () {
    $response = $this->post(route('contact.store'), [
        'name' => 'Pengunjung',
        'email' => 'visitor@example.com',
        'message' => 'Saya ingin mendiskusikan sebuah aplikasi.',
    ]);

    $response->assertRedirect()->assertSessionHas('success');
    expect(ContactMessage::count())->toBe(1);
});

it('menolak pesan kontak yang tidak valid', function () {
    $this->post(route('contact.store'), [
        'name' => '',
        'email' => 'bukan-email',
        'message' => 'singkat',
    ])->assertSessionHasErrors(['name', 'email', 'message']);

    expect(ContactMessage::count())->toBe(0);
});
