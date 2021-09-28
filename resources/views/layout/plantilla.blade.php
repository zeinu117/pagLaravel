<!doctype html>
<html lang="en">

<head>
    <title>@yield('titulo')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo2.png')}}" alt="" height="110xp" width="250xp">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/laravelManual/instalacion">instalacion y puesta en marcha de laravel
                            8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravelManual/vistas">vistas en laravel 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravelManual/vistasBlade">vistas con blade en laravel 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravelManual/rutas">rutas en laravel 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravelManual/controladores">controladores en laravel 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravelManual/proteccion">Proteccion CSRF</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-basic">
                    <footer>
                        <div class="social">
                                <a href="https://www.instagram.com/laravelnews/?hl=es"><i class="icon ion-social-instagram"></i></a>
                                <a href="#"><i class="icon ion-social-snapchat"></i></a>
                                <a href="https://twitter.com/laravelphp?lang=es"><i class="icon ion-social-twitter"></i></a>
                                <a href="#"><i class="icon ion-social-facebook"></i></a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="/">Home</a></li>
                            <li class="list-inline-item"><a href="#">Services</a></li>
                            <li class="list-inline-item"><a href="#">About</a></li>
                            <li class="list-inline-item"><a href="#">Terms</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        </ul>
                        <p class="copyright">Laravel © 2021</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
