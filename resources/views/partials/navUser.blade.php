<body>
    <li class="nav-item">
        <a class="nav-link" href=home>Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=home>Prueba</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=preguntas>Preguntas</a>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href=cart><i class="fas fa-shopping-cart"></i></a>
    </li>
</body>