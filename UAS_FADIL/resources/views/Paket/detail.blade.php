@extends('layout')

@section('judul', $data->nama_paket)

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">{{ $data->nama_paket }}</p>
        <p class="subtitle">Vendor: {{ $data->vendor ? $data->vendor->nama_vendor : 'Tidak Diketahui' }}</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->nama_paket }}">
            </figure>
        </div>
        <div class="card-content">
            <div class="content">
                {{ $data->deskripsi }}
            </div>
        </div>
    </div>

    @if ($data->lampiran)
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <h4>Lampiran</h4>
                    @foreach ($data->lampiran as $lampiran)
                        <a href="{{ asset('storage/' . $lampiran) }}" target="_blank">{{ basename($lampiran) }}</a><br>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

</section>
@endsection
