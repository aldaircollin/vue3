<li class="nav-item">
    <a href="{{ route('clientes.index') }}"
       class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <p>Clientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('vuecliente.index') }}"
       class="nav-link {{ Request::is('vuecliente*') ? 'active' : '' }}">
        <p>Vue Cliente</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('vuepersona.index') }}"
       class="nav-link {{ Request::is('vuepersona*') ? 'active' : '' }}">
        <p>Vue persona</p>
    </a>
</li>
