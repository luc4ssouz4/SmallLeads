<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
     body{
            background-color: #111827;
            color: #e2e2e2;
        }
    </style>
</head>
<body class="bg-dark">

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
        <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Convertidos</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Comunicação</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-danger">Sair</button>
      </div>
    </header>
  </div>
    @yield("content")
</body>
</html>
