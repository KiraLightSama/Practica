<!-- Fecha Field -->
<div class="form-group col-sm-6">
    <label>Fecha: </label>
    <input type="text" class="form-control" value="{{ date('d/m/Y', strtotime($cuenta->fecha)) }}" readonly>
</div>

<!-- Cambio Field -->
<div class="form-group col-sm-6">
    <label>Cambio: </label>
    <input type="text" class="form-control" value="{{ $cuenta->cambio }}" readonly>
</div>

<!--Producto-->
<div class="col-sm-6 form-group">
    <h4 class="h4">Comidas</h4>
    @foreach($cuenta->productos as $producto)
        @if($producto->categoria == "Comida")
            <div class="form-group col-sm-6 col-xs-6 has-success">
                <label for="nombre" class="control-label">{{ $producto->nombre }}</label>
                <input type="text" class="form-control" value="{{ $producto->pivot->precio }} Bs." readonly>
                <input type="hidden" value="{{ $producto->id }}" name="producto_id[]">
            </div>
            <div class="form-group col-sm-6 col-xs-6 has-error">
                <label for="cantidad" class="control-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad[]"  value="{{$producto->pivot->cantidad}}" readonly>

            </div>
        @endif
    @endforeach
</div>
<div class="col-sm-6 form-group">
    <h4 class="h4">Bebidas</h4>
    @foreach($cuenta->productos as $producto)
        @if($producto->categoria == "Bebida")
            <div class="form-group col-sm-6 col-xs-6 has-success">
                <label for="nombre" class="control-label">{{ $producto->nombre }}</label>
                <input type="text" class="form-control" value="{{ $producto->pivot->precio }} Bs." readonly>
                <input type="hidden" value="{{ $producto->id }}" name="producto_id[]">
            </div>
            <div class="form-group col-sm-6 col-xs-6 has-error">
                <label for="cantidad" class="control-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad[]" value="{{$producto->pivot->cantidad}}" readonly>
            </div>
        @endif
    @endforeach
</div>

