@extends('layouts.app')
@section('title', 'Keahlian — Nabil Huda')
@section('content')
<header class="page-hero"><div class="container"><p class="eyebrow">Keahlian</p><h1>Teknologi yang saya gunakan untuk membangun produk.</h1><p>Pilihan teknologi disesuaikan dengan kebutuhan, skala, dan kemudahan pengembangan jangka panjang.</p></div></header>
<section class="section"><div class="container grid skill-grid">
@foreach([['Flutter','Aplikasi Android dan iOS dari satu basis kode.'],['Laravel','Backend, REST API, autentikasi, dan panel pengelolaan.'],['React','Antarmuka web interaktif dan berbasis komponen.'],['MySQL & PostgreSQL','Perancangan data relasional, query, dan integritas data.'],['Tailwind CSS','Sistem tampilan responsif dan konsisten.'],['Git & GitHub','Version control, review perubahan, dan kolaborasi.']] as [$skill,$description])
<article class="card card-body"><p class="eyebrow">Teknologi</p><h2 style="font-size:1.55rem">{{ $skill }}</h2><p>{{ $description }}</p></article>
@endforeach
</div></section>
@endsection
