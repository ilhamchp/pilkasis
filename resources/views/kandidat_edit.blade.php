@extends('adminlte::page')

@section('title', 'Pilkasis - Edit Kandidat')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Edit Kandidat</h1>
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
            <form action="{{ route('kandidat.update', $data_kandidat->no_kandidat)}}" method="post" id="editKandidat" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <!-- Input Nomor Kandidat -->
                <div class="form-group">
                    <label for="no_kandidat">Nomor Kandidat:</label>
                    <input type="text" class="form-control" id="no_kandidat" value="{{ $data_kandidat->no_kandidat }}" name="no_kandidat">
                </div>

                <!-- Dropdown Data Kandidat -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nis">Kandidat:</label>
                    <div class="col-md-4">
                        <select id="nis" name="nis" class="form-control">
                            @foreach($list_kandidat as $kandidat)
                            <option value="{{ $kandidat->nis }}" @if($kandidat->nis == $data_kandidat->nis) selected @endif>{{ $kandidat->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <!-- Dropdown JK Kandidat -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="jk_kandidat">Jenis Kelamin:</label>
                    <div class="col-md-4">
                        <select id="jk_kandidat" name="jk_kandidat" class="form-control">
                            <option value="1" @if($data_kandidat->jk_kandidat == 1) selected @endif>Laki - laki</option>
                            <option value="0" @if($data_kandidat->jk_kandidat == 0) selected @endif>Perempuan</option>
                        </select>
                    </div>
                </div>

                <!-- Input Visi-->
                <div class="form-group">
                    <label for="visi">Visi:</label>
                    <textarea class="form-control" id="visi" name="visi" form="editKandidat" placeholder="Masukkan visi kandidat disini..."> {{ $data_kandidat->visi }}</textarea>
                </div>

                <!-- Input Misi-->
                <div class="form-group">
                    <label for="misi">Misi:</label>
                    <textarea class="form-control" id="misi" name="misi" form="editKandidat" placeholder="Masukkan misi kandidat disini..."> {{ $data_kandidat->misi }}</textarea>
                </div>
                <!-- Existing Foto -->
                <div>
                    <br>
                    <img src="{{ asset('assets/images/' . $data_kandidat->foto) }}" alt ="{{ $data_kandidat->foto }}" height="300" data-action="zoom">
                    <br>
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

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/zoom.css') }}">
@stop

@section('js')
    <script src="{{ asset('assets/js/zoom.js') }}"> </script>
    <script>
    let session = "{{ Session::has('sweet')}}";
        if(session){
            Swal.fire(
                'Oops..',
                '{{ Session::get('sweet') }}',
                'error'
            )
        }
        <?php Session::forget('sweet'); ?>
    </script>
@stop
