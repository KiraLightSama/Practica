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
        <label for="categoria">Categoria</label>
        <select name="categoria_id" id="" class="form-control">
            <option value=""></option>
                <option value="1"
                        @if(!(Request::is('*productos/create')) && $producto->categoria->nombre == 'Comidas') selected = 'selected' @endif>Comidas</option>
                <option value="2"
                        @if(!(Request::is('*productos/create')) && $producto->categoria->nombre == 'Bebidas') selected = 'selected' @endif>Bebidas</option>
        </select>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-default">Cancel</a>
</div>