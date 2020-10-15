@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('plugins.Sweetalert2', true)

@section('title', 'Pilkasis - Pengguna')

@section('content_header')
    <h1>Daftar Pengguna</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('pengguna.create') }}" class=" btn btn-sm btn-primary">Tambah Data Baru</a>
            <br><br>
            <table id="tabel_pengguna" class="display responsive nowrap" width="100%">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Admin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengguna as $penggunas)
                    <tr>
                        <td>{{ $penggunas->nis }}</td>
                        <td>{{ $penggunas->nama }}</td>
                        <td>{{ $penggunas->username }}</td>
                        <td>
                            @if($penggunas->is_admin)
                                Ya
                            @else
                                Bukan
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('pengguna.destroy', $penggunas->nis) }}" method="post" id="form">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('pengguna.edit',$penggunas->nis) }}" class=" btn btn-sm btn-primary">Edit</a>
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

@section('js')
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
            $('#tabel_pengguna').DataTable({
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