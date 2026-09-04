@extends('layouts.app')
@section('title', 'Tentang — Nabil Huda')
@section('content')
<header class="page-hero"><div class="container"><p class="eyebrow">Tentang saya</p><h1>Developer yang menghubungkan produk, kode, dan kebutuhan pengguna.</h1></div></header>
<section class="section"><div class="container hero-grid"><div class="portrait-wrap"><img class="portrait" src="{{ asset('assets/images/poto.png') }}" alt="Nabil Huda Rizalul Haq"></div><div class="prose"><h2>Halo, saya Nabil.</h2><p>Saya berfokus pada pengembangan aplikasi mobile menggunakan Flutter dan sistem web berbasis Laravel. Saya menikmati proses menerjemahkan masalah nyata menjadi pengalaman digital yang sederhana dan dapat dipelihara.</p><p>Dalam setiap proyek, saya memperhatikan struktur kode, integrasi API, database, performa, serta pengalaman pengguna dari layar kecil hingga desktop.</p><div class="actions"><a class="button" href="{{ route('contact.index') }}">Mari berkolaborasi</a><a class="button button-secondary" href="{{ asset('assets/cv/cv_nabil.pdf') }}" download>Unduh CV</a></div></div></div></section>
@endsection
