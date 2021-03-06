<ul id="user-dropdown" class="dropdown-content">
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
</ul>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper padding-sides">
        <a href="{{ url('/') }}" class="brand-logo left">{{ config('app.name', 'iByte') }}</a>
        <ul class="right">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
                <li>
                    <a class="dropdown-button" href="#!" data-activates="user-dropdown">
                        {{ Auth::user()->first_name }}
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            @endif
            <li><a href="/checkout"><i class="material-icons">shopping_cart</i></a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="/assembly">Assemble</a></li>
            <li><a href="/quiz">Personalize</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav right">
            <li><a href="/assembly">Assemble</a></li>
            <li><a href="/quiz">Personalize</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="right button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
