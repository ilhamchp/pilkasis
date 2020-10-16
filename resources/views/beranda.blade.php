@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'Pilkasis - Beranda')

@section('content_header')
    <h1>Beranda</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>  Halo, {{ Session::get('nama')}}!</h5>
            <h6> Silahkan pilih menu yang tersedia di samping !</h6>
        </div>
    </div>
    @can('admin')
    <div class="row">
        <!-- Card Pengguna-->
        <div class="col">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumlah Pengguna</span>
                    <span class="info-box-number">{{ $jml_pengguna }}</span>
                </div>
            </div>
        </div>

        <!-- Card Sudah Memilih-->
        <div class="col">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Sudah Memilih</span>
                    <span class="info-box-number">{{ $sdh_memilih }}</span>
                </div>
            </div>
        </div>

        <!-- Card Belum Memilih-->
        <div class="col">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Belum Memilih</span>
                    <span class="info-box-number">{{ $blm_memilih }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Card Kandidat-->
        <div class="col">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumlah Kandidat</span>
                    <span class="info-box-number"> {{ $jml_kandidat }}</span>
                </div>
            </div>
        </div>

        <!-- Card Kandidat Laki - Laki -->
        <div class="col">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Kandidat Laki - Laki</span>
                    <span class="info-box-number">{{ $kandidat_laki }}</span>
                </div>
            </div>
        </div>

        <!-- Card Kandidat Perempuan-->
        <div class="col">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Kandidat Perempuan</span>
                    <span class="info-box-number">{{ $kandidat_perempuan }}</span>
                </div>
            </div>
        </div>
    </div>
    @endcan
@stop
@section('js')
    <script>
        let session = "{{ Session::has('sweetInfo')}}";
        if(session){
            Swal.fire(
                'Informasi',
                '{{ Session::get('sweetInfo') }}',
                'info'
            )
        }
        <?php Session::forget('sweetInfo'); ?>
    </script>
@stop