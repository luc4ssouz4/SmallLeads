<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Leads - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    
    
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <style>
        body {
            background-color: #111827;
            color: #e2e2e2;
        }
    </style>
</head>

<body>

    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="{{ route('leadsList') }}" class="nav-link px-2 @if(Route::getCurrentRoute()->getName() == "leadsList") text-white @else text-secondary @endif">Inicio</a></li>
                <li><a href="{{ route('leadsNew') }}" class="nav-link px-2 @if(Route::getCurrentRoute()->getName() == "leadsNew") text-white @else text-secondary @endif">Cadastrar Lead</a></li>
                <li><a href="{{ route('leadsClients') }}" class="nav-link px-2 @if(Route::getCurrentRoute()->getName() == "leadsClients") text-white @else text-secondary @endif">Clientes Convertidos</a></li>
                <li><a href="#" class="nav-link px-2 text-secondary">Comunicações</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="{{ route('logout') }}"><button type="button" class="btn btn-danger">Sair</button></a>
            </div>
        </header>
    </div>
    @yield('content')
</body>

</html>
