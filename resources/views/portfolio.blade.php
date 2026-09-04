@extends('layouts.app')
@section('title', 'Proyek — Nabil Huda')
@section('content')
<header class="page-hero"><div class="container"><p class="eyebrow">Portofolio</p><h1>Proyek yang mengubah kebutuhan menjadi produk.</h1><p>Aplikasi mobile dan sistem web yang saya bangun dengan Flutter, Laravel, React, dan teknologi pendukung lainnya.</p></div></header>
<section class="section"><div class="container"><div class="grid project-grid">
@forelse($portfolios as $portfolio)
<article class="card">@if($portfolio->image)<img class="card-image" src="{{ asset('storage/'.$portfolio->image) }}" alt="Tampilan proyek {{ $portfolio->title }}" loading="lazy">@endif<div class="card-body"><p class="meta">{{ $portfolio->tech_stack ?: 'Digital Product' }}</p><h2 style="font-size:1.45rem">{{ $portfolio->title }}</h2><p>{{ Str::limit($portfolio->description, 150) }}</p><a class="text-link" href="{{ route('portfolio.show', $portfolio) }}">Lihat detail →</a></div></article>
@empty <div class="card card-body"><h2>Belum ada proyek</h2><p>Proyek akan tampil di halaman ini setelah ditambahkan melalui panel admin.</p></div> @endforelse
</div></div></section>
@endsection
