<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $producto->nombre }}</p>
</div>

<!-- Precio Field -->
<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $producto->precio }}</p>
</div>

<!-- Categoria Id Field -->
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    <p>{{ $producto->categoria_id }}</p>
</div>

