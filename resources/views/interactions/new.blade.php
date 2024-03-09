@extends('main')
@section('content')    

    <div class="container px-4 pt-5">
        <h4 class="pb-2 text-light">Cadastrar Interação</h4>
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
                    <label for="staticEmail" class="col-sm-2 col-form-label">Lead</label>
                    <div class="col-sm-5">
                        <select name="lead_id" class="form-select" required>
                            <option selected></option>
                            @foreach ($leads as $lead)
                            <option value="{{ $lead->id }}" >{{ $lead->nome }} {{ $lead->sobrenome }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col">
                        <select name="interacao" class="form-select" required>
                            <option selected></option>
                            <option>Chamada Telefônica</option>
                            <option>E-mail</option>
                            <option>Reunião</option>
                          </select>
                    </div>
                </div>

                <div class="form-group row m-2">
                    <label class="col-sm-2 col-form-label">Nota</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="nota" value="{{ old('nota') }}" required></textarea>
                    </div>
                </div>    

                <div class="text-end m-4">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>

            </form>

        </div>
    </div>
@endsection
