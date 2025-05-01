
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tienda Oficial River Plate') - Tienda Oficial River Plate</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/otros/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="{{asset ('css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
<!-- NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                    <h1 class="navbar-brand p-3" id="logo">Tienda Oficial River Plate</h1>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navMenu" aria-label="Menu tienda River Plate">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="{{ route('articulos.index') }}">Productos</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="{{ url('/contacto') }}">Contacto</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="{{ url('/alumnos') }}">Alumnos</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="#seccion-libre">Partidos</a>
                        </li>
                        @if(auth()->check())
                            @if(auth()->user()->role === 'admin')
                                <li class="nav-item px-2 py-2">
                                    <a class="nav-link text-uppercase text-dark" href="{{ route('admin.index') }}">Administración</a>
                                </li>
                            @elseif(auth()->user()->role === 'user')
                                <li class="nav-item px-2 py-2">
                                    <a class="nav-link text-uppercase text-dark" href="{{ url('/carrito') }}">Carrito</a>
                                </li>
                            @endif
                        @endif

                        @if (auth()->check())
                            <li class="nav-item px-2 py-2">
                                <form method="POST" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link nav-link text-uppercase text-dark">
                                        {{auth ()->user()->name}} (Cerrar sesión)
                                    </button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item px-2 py-2">
                                <a class="nav-link text-uppercase text-dark" href="{{ url('/login') }}">Login</a>
                            </li>
                         @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @if(session()->has('feedback.message'))
    <!-- Modal -->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header @if(session('feedback.type') == 'danger') bg-danger @else bg-success @endif text-white">
                        <h5 class="modal-title" id="feedbackModalLabel">
                            @if(session('feedback.type') == 'danger') Error @else Éxito @endif
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body text-center">
                        {!! session('feedback.message') !!}
                    </div>
                </div>
            </div>
        </div>


        <!-- Script para mostrar y cerrar automáticamente -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var feedbackModal = new bootstrap.Modal(document.getElementById('feedbackModal'));
                feedbackModal.show();

                // Cerrar automáticamente luego de 3 segundos
                setTimeout(function() {
                    feedbackModal.hide();
                }, 2000);
            });
        </script>
    @endif



    <main class="flex-fill">
        <section>
            @yield('carrousel')
        </section>
        <section class="container">
            @yield('content')
        </section>
    </main>
    <!-- FOOTER -->
   <footer class="text-white text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><span class="id">&copy;</span> 2025 Club Atlético River <span class="id">Plate</span></p>
                </div>
                <div class="col-md-6">
                    <!-- REDES -->
                    <a href="https://www.facebook.com/riverplateoficial/?locale=es_LA" class="btn btn-outline-light mx-2"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/RiverPlate?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="btn btn-outline-light mx-2"><i
                            class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/riverplate/" class="btn btn-outline-light mx-2"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <nav>
                <ul class="footer-menu">
                    <li><a href="{{ url('/') }}">INICIO</a></li>
                    <li><a href="{{ url('/articulos') }}">PRODUCTOS</a></li>
                    <li><a href="{{ url('/contacto') }}">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>