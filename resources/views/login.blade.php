@extends('adminlte::auth.login')

@section('title', 'Pilkasis - Login')

@section('plugins.Sweetalert2', true)

@section('js')
    <script>
    let session = "{{ Session::has('sweetError')}}";
        if(session){
            Swal.fire(
                'Oops..',
                '{{ Session::get('sweetError') }}',
                'error'
            )
        }
        <?php Session::forget('sweetError'); ?>
    </script>
@stop
