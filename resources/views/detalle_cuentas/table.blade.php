<div class="table-responsive">
    <table class="table" id="detalleCuentas-table">
        <thead>
            <tr>
                <th>Cantidad</th>
        <th>Cuenta Id</th>
        <th>Productos Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalleCuentas as $detalleCuenta)
            <tr>
                <td>{{ $detalleCuenta->cantidad }}</td>
            <td>{{ $detalleCuenta->cuenta_id }}</td>
            <td>{{ $detalleCuenta->productos_id }}</td>
                <td>
                    {!! Form::open(['route' => ['detalleCuentas.destroy', $detalleCuenta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalleCuentas.show', [$detalleCuenta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detalleCuentas.edit', [$detalleCuenta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
