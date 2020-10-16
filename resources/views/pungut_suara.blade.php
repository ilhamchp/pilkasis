@extends('adminlte::page')

@section('title', 'Pilkasis - Pungut Suara')

@section('content_header')
    <h1>Pungut Suara</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @php
                $count = 0;
            @endphp
            @if($daftar_kandidat->count()==0)
            <div class="alert alert-danger">
                Tidak ada data kandidat!
            </div>
            @endif
            @foreach($daftar_kandidat as $kandidat)
            <div class="col">
                @php
                    $count = $count + 1;
                @endphp
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $kandidat->pengguna->nama }}</h3>
                        <div class="card-tools">
                            <form action="{{ route('pengguna.destroy', $kandidat->no_kandidat) }}" method="post" id="form">
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-primary" type="submit">Pilih</button>
                            </form>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row" >
                            <div class="col">
                                <img src="{{ asset('assets/images/' . $kandidat->foto) }}" width="200" alt="{{ $kandidat->nama }}" data-action="zoom">
                            </div>
                            <div class="col">
                                <b>Visi:</b>
                                <br>
                                {{ $kandidat->visi }}
                            </div>
                            <div class="col">
                                <b>Misi:</b>
                                <br>
                                {{ $kandidat->misi }}
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Kandidat no - {{ $kandidat->no_kandidat }}
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            @if ($count%1==0)
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