@extends('adminlte::page')

@section('title', 'Pilkasis - Tambah Kandidat')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Tambah Kandidat</h1>
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
            <form action="{{ route('kandidat.store') }}" method="post" id="createKandidat" enctype="multipart/form-data">
                {{ csrf_field() }}

                <!-- Input Nomor Kandidat -->
                <div class="form-group">
                    <label for="no_kandidat">Nomor Kandidat:</label>
                    <input type="text" class="form-control" id="no_kandidat" value="{{ old('no_kandidat')}}" name="no_kandidat">
                </div>

                <!-- Dropdown Data Kandidat -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nis">Kandidat:</label>
                    <div class="col-md-4">
                        <select id="nis" name="nis" class="form-control">
                            @foreach($data_kandidat as $kandidat)
                            <option value="{{ $kandidat->nis }}" @if(old('nis') == $kandidat->nis) selected @endif>{{ $kandidat->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <!-- Dropdown JK Kandidat -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="jk_kandidat">Jenis Kelamin:</label>
                    <div class="col-md-4">
                        <select id="jk_kandidat" name="jk_kandidat" class="form-control">
                            <option value="1" @if(old('jk_kandidat') == 1) selected @endif>Laki - laki</option>
                            <option value="0" @if(old('jk_kandidat') == 0) selected @endif>Perempuan</option>
                        </select>
                    </div>
                </div>

                <!-- Input Visi-->
                <div class="form-group">
                    <label for="visi">Visi:</label>
                    <textarea class="form-control" id="visi" name="visi" form="createKandidat" placeholder="Masukkan visi kandidat disini..."> {{ old('visi') }}</textarea>
                </div>

                <!-- Input Misi-->
                <div class="form-group">
                    <label for="misi">Misi:</label>
                    <textarea class="form-control" id="misi" name="misi" form="createKandidat" placeholder="Masukkan misi kandidat disini..."> {{ old('misi') }}</textarea>
                </div>

                <!-- Input Foto-->
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <br>
                    <input type="file" id="foto" name="foto" accept="image/*">
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
