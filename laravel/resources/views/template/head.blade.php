<!doctype html>
<html lang="en">
  <head>
    <title>HERMES | @yield('title','Inicio')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
  <body>
    <span class="bckg"></span>
    <header>
      <h1>HERMES</h1>
      <nav>
        <ul>
          <li>
            <a href="javascript:void(0);" data-title="Projects">Reportes</a>
                <li>
                  <a href="javascript:void(0);">Estado</a>
                </li>
                <li>
                  <a href="javascript:void(0);">Formalizado</a>
                </li>
        </li>

          <li>
            <a href="javascript:void(0);" data-title="Timeline">Graficas</a>
          </li>
          <li>
            <a href="javascript:void(0);" data-title="Settings">Estado</a>
          </li>
          <li>
            <a href="javascript:void(0);" data-title="Search">Formalizado</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="title">
        <h2>Escritorio</h2>
        <a href="javascript:void(0);">Bienvenido Alfredo!</a>
      </div>
    
      <article class="larg">
        @yield('content')
      </article>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/index.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>