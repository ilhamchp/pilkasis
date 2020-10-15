@extends('adminlte::page')

@section('title', 'Pilkasis - Edit Data Pengguna')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Edit Data Pengguna</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Error list -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <hr>
            @endif
            <!-- End of Error List-->

            <!-- Form -->
            <form action="{{ route('pengguna.update', $pengguna->nis) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <!-- Input NIS -->
                <div class="form-group">
                    <label for="nis">NIS:</label>
                    <input type="text" class="form-control" id="nis" value="{{ $pengguna->nis }}" name="nis">
                </div>

                <!-- Input Nama -->
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" value="{{ $pengguna->nama }}" name="nama">
                </div>

                <!-- Input Username-->
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" value="{{ $pengguna->username }}" name="username">
                </div>

                <!-- Input Password-->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <!-- Dropdown Is Admin -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="is_admin">Admin?</label>
                    <div class="col-md-4">
                        <select id="is_admin" name="is_admin" class="form-control">
                            <option value="1" @if($pengguna->is_admin) selected @endif>Ya</option>
                            <option value="0" @if(!$pengguna->is_admin) selected @endif>Bukan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                </div>
            </form>
            <!-- End of Form -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('js')
    @if(Session::has('sweet'))
        <script>
            Swal.fire(
                'Oops..',
                '{{ Session::get('sweet') }}',
                'error'
            )
        </script>
        @php
            Session::forget('sweet');
        @endphp
    @endif
@stop
