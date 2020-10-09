




<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('cuentas*') ? 'active' : '' }}">
    <a href="{{ route('cuentas.index') }}"><i class="fa fa-edit"></i><span>Cuentas</span></a>
</li>


