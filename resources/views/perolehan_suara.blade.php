@extends('adminlte::page')

@section('title', 'Pilkasis - Perolehan Suara')

@section('content_header')
    <h1>Hasil Perolehan Suara</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @php
                $count = 0;
            @endphp
            @if($daftar_kandidat->count()==0)
            <div class="alert alert-danger">
                Tidak ada data perolehan suara!
            </div>
            @endif
            @foreach($daftar_kandidat as $kandidat)
            <div class="col">
                @php
                    $count = $count + 1;
                @endphp
                <div class="info-box bg-info">
                    <span class="info-box-icon">
                        <img src="{{ asset('assets/images/' . $kandidat->foto) }}" width="300" alt="{{ $kandidat->nama }}" data-action="zoom">
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Kandidat No - {{ $kandidat->no_kandidat }}</span>
                        <span class="info-box-text">{{ $kandidat->pengguna->nama }}</span>
                        <span class="info-box-number">
                            @if($kandidat->jk_kandidat==1)
                                {{ $kandidat->perolehanSuara1->count() }} Orang memilih
                            @else
                                {{ $kandidat->perolehanSuara2->count() }} Orang memilih
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            @if ($count%2==0)
                </div>
                <div class="row">
                @endif
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/zoom.css') }}">
@stop

@section('js')
    <script src="{{ asset('assets/js/zoom.js') }}"> </script>
@stop