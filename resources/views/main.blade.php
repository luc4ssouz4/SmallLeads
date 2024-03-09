<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Leads - Dashboard</title>
    <link href="{{ url('/assets/css/bootstrap.min.css') }}" rel="stylesheet">   
    <link href="{{ url('/assets/css/bootstrap-tagsinput.css') }}" rel="stylesheet">   
    <link href="{{ url('/assets/css/dataTables.dataTables.css') }}" rel="stylesheet">   

    <script src="{{ url('/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ url('/assets/js/dataTables.js') }}"></script>
    
    <style>
        body {
            background-color: #111827;
            color: #e2e2e2;
        }
        .container {
            background-color: rgb(0 0 0 / 20%);
            border-radius: 6px;
        }
    </style>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#LeadTable');
        });
    </script>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="{{ route('leadsList') }}"
                        class="nav-link px-2 @if (Route::getCurrentRoute()->getName() == 'leadsList') text-white @else text-secondary @endif">Inicio</a>
                </li>
                <li><a href="{{ route('leadsNew') }}"
                        class="nav-link px-2 @if (Route::getCurrentRoute()->getName() == 'leadsNew') text-white @else text-secondary @endif">Cadastrar
                        Lead</a></li>
                <li><a href="{{ route('leadsClients') }}"
                        class="nav-link px-2 @if (Route::getCurrentRoute()->getName() == 'leadsClients') text-white @else text-secondary @endif">Clientes
                        Convertidos</a></li>
                <li><a href="{{ route('leadsInteractionsNew') }}"
                        class="nav-link px-2 @if (Route::getCurrentRoute()->getName() == 'leadsInteractionsNew') text-white @else text-secondary @endif">Cadastrar
                        Interação</a></li>
                <li><a href="{{ route('leadsInteractions') }}"
                        class="nav-link px-2 @if (Route::getCurrentRoute()->getName() == 'leadsInteractions') text-white @else text-secondary @endif">Interações</a>
                </li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="{{ route('logout') }}"><button type="button" class="btn btn-danger">Sair</button></a>
            </div>
        </header>
    </div>
    @yield('content')

    
</body>

</html>
