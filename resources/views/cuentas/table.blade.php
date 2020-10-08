<div class="table-responsive">
    <table class="table" id="cuentas-table">
        <thead>
        <tr>
            <th>Fecha</th>
            <th>Cambio</th>
            <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cuentas as $cuenta)
            <tr>
                <td>{{ date('d-m-Y', strtotime($cuenta->fecha)) }}</td>
                <td>{{ $cuenta->cambio }}</td>
                <td>{{ $cuenta->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['cuentas.destroy', $cuenta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cuentas.show', [$cuenta->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cuentas.edit', [$cuenta->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
