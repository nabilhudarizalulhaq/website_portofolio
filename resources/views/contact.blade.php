@extends('layouts.app')
@section('title', 'Kontak — Nabil Huda')
@section('content')
<header class="page-hero"><div class="container"><p class="eyebrow">Kontak</p><h1>Mari membicarakan proyek Anda.</h1><p>Jelaskan tujuan, fitur utama, dan target waktu. Saya akan merespons dengan langkah berikutnya yang jelas.</p></div></header>
<section class="section"><div class="container contact-grid"><div><h2>Mulai percakapan</h2><p class="lead">Formulir ini tersimpan aman di panel admin. Jangan kirim kata sandi atau data rahasia.</p><p><strong>GitHub</strong><br><a class="text-link" href="https://github.com/nabilhudarizalulhaq" target="_blank" rel="noopener noreferrer">nabilhudarizalulhaq ↗</a></p></div>
<form class="form-card" method="POST" action="{{ route('contact.store') }}">@csrf
    @if(session('success'))<div class="alert" role="status">{{ session('success') }}</div>@endif
    <div class="field"><label for="name">Nama</label><input id="name" name="name" value="{{ old('name') }}" maxlength="255" autocomplete="name" required>@error('name')<p class="error">{{ $message }}</p>@enderror</div>
    <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" value="{{ old('email') }}" maxlength="255" autocomplete="email" required>@error('email')<p class="error">{{ $message }}</p>@enderror</div>
    <div class="field"><label for="message">Pesan</label><textarea id="message" name="message" rows="7" minlength="10" maxlength="5000" required>{{ old('message') }}</textarea>@error('message')<p class="error">{{ $message }}</p>@enderror</div>
    <button class="button" type="submit">Kirim pesan</button>
</form></div></section>
@endsection
