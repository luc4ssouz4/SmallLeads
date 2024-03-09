@extends('main')

@section('content')
    <script>
        $(document).ready(function() {
            $("#inputTag").tagsinput('items');           
        });
    </script>
    <style>
        .bootstrap-tagsinput {
            width: 100%;
            padding: 10px 6px;
        }
        .bootstrap-tagsinput .tag {
            color: #fff;
            padding: 3px;
            border-radius: 5px;
            background-color: #0d6efd;
        }
    </style>

    <div class="container px-4 pt-5">
        <h4 class="pb-2 text-light">Cadastrar Lead</h4>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-8">            

            @if (isset($errors) && count($errors)>0) 
            <div class="alert alert-danger m-4" role="alert">
                <h4 class="alert-heading">Erro!</h4>
                <hr>
                @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
                @endforeach
              </div>
            @endif
            
            <form method="POST">
                @csrf
                <div class="row m-2">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Digite o nome" name="nome" value="{{ old('nome') }}" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Digite o sobrenome" name="sobrenome" value="{{ old('sobrenome') }}" required>
                    </div>
                </div>

                <div class="form-group row m-2">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="Digite o email" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>

                <div class="form-group row m-2">
                    <label class="col-sm-2 col-form-label">Empresa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Digite a empresa" name="empresa" value="{{ old('empresa') }}" required>
                    </div>
                </div>

                <div class="form-group row m-2">
                    <label class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Digite o telefone" name="telefone" value="{{ old('telefone') }}" required>
                    </div>
                </div>

                <div class="form-group row m-2">
                    <label class="col-sm-2 col-form-label">Tags</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Adicione tags" id="inputTag" value="{{ old('tags') }}" name="tags">
                    </div>
                </div>     

                <div class="text-end m-4">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
