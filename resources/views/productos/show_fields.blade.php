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
    {!! Form::label('categoria', 'Categoria') !!}
    <p>{{ $producto->categoria }}</p>
</div>

