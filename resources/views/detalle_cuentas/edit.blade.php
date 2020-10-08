@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detalle Cuenta
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($detalleCuenta, ['route' => ['detalleCuentas.update', $detalleCuenta->id], 'method' => 'patch']) !!}

                        @include('detalle_cuentas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection