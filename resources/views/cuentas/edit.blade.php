@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cuenta
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cuenta, ['route' => ['cuentas.update', $cuenta->id], 'method' => 'patch']) !!}

                        @include('cuentas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection