@extends('layouts.app')
@section('title', $portfolio->title.' — Nabil Huda')
@section('meta_description', Str::limit($portfolio->description, 155))
@section('content')
<header class="page-hero"><div class="container"><a class="text-link" href="{{ route('portfolio.index') }}">← Semua proyek</a><p class="eyebrow" style="margin-top:1.5rem">{{ $portfolio->tech_stack ?: 'Digital Product' }}</p><h1>{{ $portfolio->title }}</h1></div></header>
<article class="section"><div class="container prose">
    @if($portfolio->image)<img class="detail-image" src="{{ asset('storage/'.$portfolio->image) }}" alt="Tampilan utama {{ $portfolio->title }}">@endif
    <h2 style="margin-top:2.5rem">Tentang proyek</h2><p>{{ $portfolio->description }}</p>
    @if($portfolio->link)<div class="actions"><a class="button" href="{{ $portfolio->link }}" target="_blank" rel="noopener noreferrer">Kunjungi proyek ↗</a></div>@endif
</div>
@if(!empty($portfolio->images))<div class="container" style="margin-top:3rem"><h2>Galeri proyek</h2><div class="grid gallery" style="margin-top:1.5rem">@foreach($portfolio->images as $image)<img src="{{ asset('storage/'.$image) }}" alt="Galeri {{ $portfolio->title }}" loading="lazy">@endforeach</div></div>@endif
</article>
@endsection
