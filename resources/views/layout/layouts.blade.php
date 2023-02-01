<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MDBootstrap -->
    <script src="https://kit.fontawesome.com/825719bb21.js" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">

    <script scr="{{asset('js/mdb.min.js')}}"></script>
    <title>Desarrollo Web Profesional</title>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Serie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://127.0.0.1:8000/formulario">Sign In</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://noddustrends.s3.amazonaws.com/uploads/2019/07/dark.jpg');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">D A R K</h1>
                <h4 class="mb-3">Creators:  Baran bo Odar, Jantje Friese</h4>
                <a class="btn btn-outline-light btn-lg ov-btn-slide-close" href="https://dark.netflix.io/es" role="button"
                >go to Netflix</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
      <div class="container mt-5 mb-5">

        <h1>@yield('titulo')</h1>

        <hr class="hr">

        @yield('contenido')

      </div>
      <footer class="bg-primary text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/alvarito.herrera.56/"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://www.instagram.com/alvaro__herrera1/"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="https://www.linkedin.com/in/%C3%A1lvaro-herrera-b437a3244/"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="https://github.com/alvaro-189"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="">Álvaro Emmanuel Herrera Anda</a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
