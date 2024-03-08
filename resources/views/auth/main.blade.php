<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Leads - Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link href="https://getbootstrap.com/docs/5.3/examples/sign-in/sign-in.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ url('/js/auth.js') }}"></script>

    <style>
        body{
            background-color: #111827;
            color: #e2e2e2;
        }
        .form-control{
            background-color: #1f2937;
            border: 1px solid #1f2937;
            color: #c6c6c6;       
         }       
         .form-floating>.form-control:not(:placeholder-shown)~label::after, .form-control:focus, .form-floating>.form-control:focus~label::after{
            background-color: #1f2937;            
            color: #c6c6c6;   
        }
        .form-floating>.form-control:not(:placeholder-shown)~label, .form-floating>.form-control:focus~label{
            color: #fff;
        }
        .form-signin input[type="password"] {
            margin-bottom: 0px;
        }
        button{
            margin-top:10px;
        }
    </style>


</head>

<body class="d-flex align-items-center py-4">
@yield("content")
</body>

</html>