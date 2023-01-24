<div class="form-group">

    {!! Form::label('name', 'nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>


<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el Slug de la eqiqueta',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>



{{-- <label for="">Color</label>

            <select name="color" id="" class="form-control">

                <option value="red">Color rojo</option>
                <option value="green">Color verde</option>
                <option value="blue" selected>Color azul</option>

            </select> --}}



{!! Form::label('color', 'color') !!}

{!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

@error('color')
    <small class="text-danger">{{ $message }}</small>
@enderror
