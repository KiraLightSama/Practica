<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Cuenta Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cuenta_id', 'Cuenta Id:') !!}
    {!! Form::number('cuenta_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Productos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productos_id', 'Productos Id:') !!}
    {!! Form::number('productos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detalleCuentas.index') }}" class="btn btn-default">Cancel</a>
</div>
