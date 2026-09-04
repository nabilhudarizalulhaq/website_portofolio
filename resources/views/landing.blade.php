@extends('layouts.app')
@section('content')
<section class="hero"><div class="container hero-grid">
    <div><p class="eyebrow">Mobile & Web Developer</p><h1>Membangun produk digital yang cepat, rapi, dan berguna.</h1>
        <p class="lead">Saya Nabil Huda Rizalul Haq. Saya mengembangkan aplikasi Flutter dan sistem web Laravel dari ide hingga siap digunakan.</p>
        <div class="actions"><a class="button" href="{{ route('portfolio.index') }}">Lihat proyek</a><a class="button button-secondary" href="{{ route('contact.index') }}">Diskusikan pekerjaan</a></div>
    </div>
    <div class="portrait-wrap"><img class="portrait" src="{{ asset('assets/images/poto.png') }}" width="600" height="750" alt="Nabil Huda Rizalul Haq" fetchpriority="high"></div>
</div></section>
<section class="section"><div class="container">
    <div class="section-heading"><div><p class="eyebrow">Pilihan proyek</p><h2>Solusi yang sudah saya kerjakan</h2></div><p>Beberapa implementasi aplikasi mobile dan web dengan fokus pada alur yang jelas, performa, dan kemudahan pemeliharaan.</p></div>
    <div class="grid project-grid">
    @forelse($portfolios as $portfolio)
        <article class="card">@if($portfolio->image)<img class="card-image" src="{{ asset('storage/'.$portfolio->image) }}" alt="Tampilan proyek {{ $portfolio->title }}" loading="lazy">@endif<div class="card-body"><p class="meta">{{ $portfolio->tech_stack ?: 'Digital Product' }}</p><h3>{{ $portfolio->title }}</h3><p>{{ Str::limit($portfolio->description, 125) }}</p><a class="text-link" href="{{ route('portfolio.show', $portfolio) }}">Baca studi kasus →</a></div></article>
    @empty
        <div class="card card-body"><h3>Proyek segera hadir</h3><p>Koleksi proyek sedang disiapkan.</p></div>
    @endforelse
    </div>
    <div class="actions"><a class="button button-secondary" href="{{ route('portfolio.index') }}">Lihat semua proyek</a></div>
</div></section>
<section class="section section-tint"><div class="container section-heading"><div><p class="eyebrow">Kolaborasi</p><h2>Punya ide yang ingin diwujudkan?</h2></div><div><p>Ceritakan kebutuhan aplikasi Anda. Saya akan membantu memetakan solusi teknis yang realistis.</p><div class="actions"><a class="button" href="{{ route('contact.index') }}">Hubungi saya</a></div></div></div></section>
@endsection
