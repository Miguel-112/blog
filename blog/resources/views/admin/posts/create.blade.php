@extends('adminlte::page')

@section('content_header')
<h1>Crear nuevo post</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        form {!! Form::open(['route' => 'admin.posts.store','autocomplete'=>'off','files' => true]) !!} 


       

        @include('admin.posts.partials.form')



        {!! Form::submit('Crear post', ['class'=>'btn btn-primary','btn btn-sm']) !!}



        {!! Form::close() !!}


    </div>
</div>

@stop


@section('css')


<style>
    .imagewraper {
        position: relative;
        padding-bottom: 50.5%;
    }

    .imagewraper img {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

</style>

@stop



@section('js')



<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur'
            , getPut: '#slug'
            , space: '-'
        });
    });

    ClassicEditor
        .create(document.querySelector('#extract'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });

    // cambiar imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }

</script>

@endsection
