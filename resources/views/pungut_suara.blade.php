@extends('adminlte::page')

@section('plugins.Sweetalert2', true)

@section('title', 'Pilkasis - Pungut Suara')

@section('content_header')
    <h1>{{ $nama_sesi }}</h1>
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
                            <form action="{{ route('pungut-suara.pilih', $kandidat->no_kandidat) }}" method="post" id="form">
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
        $(document).ready( function () {
            $('.btn-primary').click(function(e) {
                var $form =  $(this).closest("form"); //Get the form here.
                e.preventDefault();
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Pilihan anda tidak dapat dirubah!',
                    type: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, pilih!',
                    cancelButtonText: 'Tidak, batalkan!'
                }).then((result) => {
                    if (result.value) {
                        $form.submit(); //Submit your Form Here. 
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                        'Dibatalkan',
                        'Kandidat tidak dipilih',
                        'info'
                        )
                    }
                })
            });
        });
    </script>
@stop