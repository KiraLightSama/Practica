<!-- Fecha Field -->
<div class="form-group col-sm-6" id='fecha'>
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', Request::is('*cuentas/create') ? null : $cuenta->fecha, ['class' => 'form-control']) !!}
</div>

@push('scripts')
<script type="text/javascript">
    $('#fecha').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
    })
</script>
@endpush

<!-- Cambio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cambio', 'Cambio:') !!}
    {!! Form::number('cambio', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<input type="hidden" value="{{ Auth::user()->id }}" name="user_id">


<!--Productos-->
@if(Request::is('*cuentas/create'))
    <div class="col-sm-6 form-group">
        <h4 class="h4">Comidas</h4>
        @foreach($productos as $producto)
            @if($producto->categoria == "Comida")
                <div class="form-group col-sm-6 col-xs-6 has-success">
                    <label for="precio" class="control-label">{{ $producto->nombre }}</label>
                    <input type="number" class="form-control" value="{{ $producto->precio }}" name="precio[]">
                    <input type="hidden" value="{{ $producto->id }}" name="producto_id[]">
                </div>
                <div class="form-group col-sm-6 col-xs-6 has-error">
                    <label for="cantidad" class="control-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad[]" value="0">
                </div>
            @endif
        @endforeach
    </div>
    <div class="col-sm-6 form-group">
        <h4 class="h4">Bebidas</h4>
        @foreach($productos as $producto)
            @if($producto->categoria == "Bebida")
                <div class="form-group col-sm-6 col-xs-6 has-success">
                    <label for="precio" class="control-label">{{ $producto->nombre }}</label>
                    <input type="number" class="form-control" value="{{ $producto->precio }}" name="precio[]">
                    <input type="hidden" value="{{ $producto->id }}" name="producto_id[]">
                </div>
                <div class="form-group col-sm-6 col-xs-6 has-error">
                    <label for="cantidad" class="control-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad[]" value="0">
                </div>
            @endif
        @endforeach
    </div>
@else
    <div class="col-sm-6 form-group">
        <h4 class="h4">Comidas</h4>
        @foreach($cuenta->productos as $producto)
            @if($producto->categoria == "Comida")
                <div class="form-group col-sm-6 col-xs-6 has-success">
                    <label for="precio" class="control-label">{{ $producto->nombre }}</label>
                    <input type="number" class="form-control" value="{{ $producto->pivot->precio }}" name="precio[]">
                    <input type="hidden" value="{{ $producto->id }}" name="producto_id[]">
                </div>
                <div class="form-group col-sm-6 col-xs-6 has-error">
                    <label for="cantidad" class="control-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad[]" value="{{$producto->pivot->cantidad}}">

                </div>
            @endif
        @endforeach
    </div>
    <div class="col-sm-6 form-group">
        <h4 class="h4">Bebidas</h4>
        @foreach($cuenta->productos as $producto)
            @if($producto->categoria == "Bebida")
                <div class="form-group col-sm-6 col-xs-6 has-success">
                    <label for="precio" class="control-label">{{ $producto->nombre }}</label>
                    <input type="number" class="form-control" value="{{ $producto->pivot->precio }}" name="precio[]">
                    <input type="hidden" value="{{ $producto->id }}" name="producto_id[]">
                </div>
                <div class="form-group col-sm-6 col-xs-6 has-error">
                    <label for="cantidad" class="control-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad[]" value="{{$producto->pivot->cantidad}}">
                </div>
            @endif
        @endforeach
    </div>
@endif
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cuentas.index') }}" class="btn btn-default">Cancel</a>
</div>
