@extends('adminlte::page')

@section('title', 'Pilkasis - Tambah Pengguna')

@section('content_header')
    <h1>Tambah Pengguna</h1>
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
            <form action="{{ route('pengguna.store') }}" method="post">
                {{ csrf_field() }}

                <!-- Input NIS -->
                <div class="form-group">
                    <label for="nis">NIS:</label>
                    <input type="text" class="form-control" id="nis" name="nis">
                </div>

                <!-- Input Nama -->
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <!-- Input Username-->
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
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
                            <option value="true">Ya</option>
                            <option value="false">Bukan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Reset</button>
                </div>
            </form>
            <!-- End of Form -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop