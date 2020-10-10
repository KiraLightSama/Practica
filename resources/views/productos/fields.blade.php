<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6">
    <div class="form-group">
        <label for="categoria">Categorias</label>
        <select name="categoria" id="" class="form-control">
            <option value=""></option>
            <option value="Comida"
                    @if(!(Request::is('*productos/create')) && $producto->categoria == 'Comida') selected = 'selected' @endif>Comida</option>
            <option value="Bebida"
                    @if(!(Request::is('*productos/create')) && $producto->categoria == 'Bebida') selected = 'selected' @endif>Bebida</option>
        </select>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-default">Cancel</a>
</div>
