<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="/manifest.json" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>Tiket Konser</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-transparent shadow-sm">
      <div class="container">
        @if ($loggedIn)
          <a class="navbar-brand" href="/dashboard">Dashboard Admin</a>
        @else
          <a class="navbar-brand" href="/">Tiket Konser</a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          @if ($loggedIn)
          <span class="d-flex navbar-text ms-auto">
            <a class="nav-link me-4" href="{{ url('/checkin') }}">Check In</a>
            <a class="nav-link me-3" href="{{ url('/laporan') }}">Laporan</a>            
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="ms-5 bg-transparent border-0 text-danger"><i class="bi bi-box-arrow-left"></i> Logout</button>
            </form>
          </span>
          @else
          <span class="navbar-text ms-auto">
            <a href="/login" class="text-decoration-none text-primary">Login <i class="bi bi-box-arrow-in-right"></i></a>
          </span>
          @endif
        </div>
      </div>
    </nav>

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>