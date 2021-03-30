<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LARAVEL - RELATIONS [Boolpress - @yield('title')]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>

    <div class="wrapper">

      <header>
        <h1>Boolpress</h1>
        <h2>@yield('title')</h2>
      </header>
      <br />
      <br />

      <main>
        @yield('content')
      </main>

      <br />
      <hr />
      <br />
      <footer>
        <a href="javascript:history.back()"><b>Go Back</b></a>
      </footer>
      <br />
      <hr />
      <br />

    </div>


  </body>
</html>
