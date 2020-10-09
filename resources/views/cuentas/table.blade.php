<div class="table-responsive">
    <table class="table" id="cuentas-table">
        <thead>
        <tr>
            <th>Fecha</th>
            <th>Cambio</th>
            <th>Total Comida</th>
            <th>Total Bebida</th>
            <th>Total</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cuentas as $cuenta)
            @if($cuenta->user_id == Auth::user()->id)
                <tr>
                    <td>{{ date('d-m-Y', strtotime($cuenta->fecha)) }}</td>
                    <td>{{ $cuenta->cambio }}</td>
                    <td>{{ DB::table('sumatotal')->where('cuenta',$cuenta->id)->where('categoria', 'Comida')->sum('suma') }}</td>
                    <td>{{ DB::table('sumatotal')->where('cuenta',$cuenta->id)->where('categoria', 'Bebida')->sum('suma') }}</td>
                    <td>{{ DB::table('sumatotal')->where('cuenta',$cuenta->id)->sum('suma') }}</td>
                    <td>
                        <div class='btn-group'>
                            <a href="{{ route('cuentas.show', [$cuenta->id]) }}" class='btn btn-info btn-xs'><i
                                        class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('cuentas.edit', [$cuenta->id]) }}" class='btn btn-warning btn-xs'><i
                                        class="glyphicon glyphicon-edit"></i></a>
                        </div>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
