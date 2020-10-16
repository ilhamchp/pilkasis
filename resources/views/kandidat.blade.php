@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('plugins.Sweetalert2', true)

@section('title', 'Pilkasis - Kandidat')

@section('content_header')
    <h1>Daftar Kandidat</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('kandidat.create') }}" class=" btn btn-sm btn-primary">Tambah Data Baru</a>
            <br><br>
            <table id="tabel_kandidat" class="display responsive" width="100%">
                <thead>
                    <tr>
                        <th>No Kandidat</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kandidat as $kandidats)
                    <tr>
                        <td>{{ $kandidats->no_kandidat }}</td>
                        <td>{{ $kandidats->pengguna->nama }}</td>
                        <td>
                            @if($kandidats->jk_kandidat == 1)
                                Laki - laki
                            @else
                                Perempuan
                            @endif
                        </td>
                        <td>{{ $kandidats->visi }}</td>
                        <td>{{ $kandidats->misi }}</td>
                        <td>
                            <img src="{{ asset('images/' . $kandidats->foto) }}" alt ="{{ $kandidats->foto }}" height="200" data-action="zoom">
                        </td>
                        <td>
                            <form action="{{ route('kandidat.destroy', $kandidats->no_kandidat) }}" method="post" id="form">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('kandidat.edit',$kandidats->no_kandidat) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/zoom.css') }}">
@stop

@section('js')
    <script src="{{ asset('assets/js/zoom.js') }}"> </script>
    <script>
        let session = "{{ Session::has('sweet')}}";
        if(session){
            Swal.fire(
                'Yeayy..',
                '{{ Session::get('sweet') }}',
                'success'
            )
        }
        <?php Session::forget('sweet'); ?>
        $(document).ready( function () {
            $('#tabel_kandidat').DataTable({
                responsive: true
            });

            $('.btn-danger').click(function(e) {
                var $form =  $(this).closest("form"); //Get the form here.
                e.preventDefault();
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Data yang dihapus tidak dapat dikembalikan!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Tidak, batalkan'
                }).then((result) => {
                    if (result.value) {
                        $form.submit(); //Submit your Form Here. 
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                        'Dibatalkan',
                        'Data tidak dihapus',
                        'error'
                        )
                    }
                })
            });
        });
    </script>
@stop