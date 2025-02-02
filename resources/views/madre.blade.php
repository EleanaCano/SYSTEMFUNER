<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="../../css/style.css" rel="stylesheet" type="text/css" >
    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    !-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/page-logo.png"/>
    <script src="/icons.js"></script>

    <!--Titulo de la página-->
    <title>@yield('title')</title>
</head>
<body>

<!--Panel superior-->
<nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
    <button id="sidebarCollapse" class="btn navbar-btn">
        <i class="fas fa-lg fa-bars"></i>
    </button>
    <a class="navbar-brand" href="">
        <img src="/assets/logo.png" class="rounded-circle" width="50" height="50">
        <h4 id="logo">Funerales La Bendición</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" id="link" href="#">
                    <i class="fas fa-user"></i>Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="link" href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    Cerrar sesión
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!--Panel Lateral-->
<div class="wrapper fixed-left">
    <nav id="sidebar">
        <ul class="list-unstyled components" style="font-size: 14px">
            <li>
                <a href=""><i class="fas fa-home" style="font-size: 14px"></i>Inicio</a>
            </li>
            <li>
                <a href=""><i class="fas fa-clipboard" style="font-size: 14px"></i>Clientes</a>
            </li>
            <li>
                <a href=""><i class="fas fa-user-cog" style="font-size: 14px"></i>Empleados</a>
            </li>
            <li>
                <a href=""><i class="fas fa-hands-helping" style="font-size: 14px"></i>Servicios</a>
            </li>
            <li>
                <a href=""><i class="fas fa-shopping-cart" style="font-size: 14px"></i>Productos</a>
            </li>
            <li>
                <a href=""><i class="fas fa-boxes" style="font-size: 14px"></i>Inventario</a>
            </li>
        </ul>
    </nav>

<!--Contenido de la página-->
    <div id="content">
        @yield('content')
        <!--para agregar iconos de bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../../js/script.js"></script>
</body>
</html>
