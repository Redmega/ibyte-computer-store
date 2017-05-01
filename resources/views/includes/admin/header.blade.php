<nav class="light-blue lighten-1" role="navigation">
    <a href="{{ url('/') }}" class="brand-logo center"></a>
        <ul class="side-nav fixed" style="width:250px">
            <li class="logo" style="margin:25px 0 50px;">
                <a id="logo-container" href="{{ route('admin/index') }}" style="font-size:1.5rem;">
                    iByte Admin Panel
                </a>
            </li>
            <li><a href="{{ route('admin/index') }}">Dashboard</a></li>
            <li><a href="{{ route('admin/orders') }}">Orders</a></li>
            <li><a href="{{ route('admin/inventory') }}">Inventory</a></li>
            <li><a href="{{ route('admin/users') }}">Users</a></li>
            <li><a href="{{ route('admin/finance') }}">Finances</a></li>
            @if (!Auth::guest())
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </li>
            @endif
        </ul>
        <a href="#" data-activates="side-nav" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
