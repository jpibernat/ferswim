<!--<body>
<nav class="fixed-top">
        <ul class="navlinks">
            <li><a href=home><img src="/img/logo.png" alt=""></a></li>
            <li><a href=home>Blog</a></li>
            <li><a href=preguntas>Preguntas</a></li>
            <li><a href=register>Registrate</a></li>
            <li><a href=login>Login</a></li>
            <li><a href=login><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        <div class="logo">
            <img src="/img/logo.png" alt=""></a>
        </div>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <script src="/js/nav.js"></script>
</body>-->
<body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=home><img src="/img/logo.png" alt=""></a>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('preguntas') }}">{{ __('Preguntas') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Crea una cuenta') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href=login><i class="fas fa-shopping-cart"></i></a>
                            </li>
                       @else           
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=users>Administrar Usuarios</a>
                                    <a class="dropdown-item" href=addProduct>Agregar Producto</a>
                                    <a class="dropdown-item" href=faq>Editar Preguntas</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>-->
                            
                            
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</body>