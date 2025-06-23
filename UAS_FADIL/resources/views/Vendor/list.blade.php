@extends('layout')

@section('judul', 'Vendor')

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Vendor</p>
        <p class="subtitle">Wedding Organizer</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
    <div class="card">
        <div class="card-content">
            <div class="content">
                {{ $item->nama_vendor }}
            </div>
        </div>
        <footer class="card-footer">
            <a href="/Vendor/{{ $item->id }}" class="card-footer-item">
                Selengkapnya
            </a>
        </footer>
    </div>
    @endforeach
</section>
@endsection
