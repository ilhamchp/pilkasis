@extends('adminlte::page')

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