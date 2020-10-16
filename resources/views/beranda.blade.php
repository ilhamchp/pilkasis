@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'Pilkasis - Beranda')

@section('content_header')
    <h1>Beranda</h1>
@stop

@section('content')
    <h5>  Halo, {{ Session::get('nama')}}!</h5>
    <p>Status kamu sedang login ? {{ Session::get('login')}} </p>
    <p>NIS kamu {{ Session::get('nis')}} </p>
    <p>Username kamu {{ Session::get('username')}} </p>
    <p>Apakah kamu Admin? {{ Session::get('is_admin')}} </p>
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