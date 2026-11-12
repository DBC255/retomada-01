<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav class="navbar md:navbar-expand bg-1">
             <div class="drawer-body mb-2 md:mb-0">
        <ul class="nav navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">construsenai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('categoria.index') }}">Categorias</a>
          </li>
            </div>
        </nav>
        {{ $slot }}
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </body>
</html>
