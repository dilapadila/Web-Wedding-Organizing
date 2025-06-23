@extends('layout')

@section('judul', 'Paket ' . $Vendor->nama_vendor)

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Paket</p>
        <p class="subtitle"> Vendor: {{ $Vendor->nama_vendor }}</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_paket }}">
            </figure>
        </div>
        <div class="card-content">
            <div class="content">
                <h2>{{ $item->nama_paket }}</h2>
            </div>
        </div>
        <footer class="card-footer">
            <a href="/Paket/{{ $item->id }}" class="card-footer-item">
                Selengkapnya
            </a>
        </footer>
    </div>
    @endforeach
</section>
@endsection
