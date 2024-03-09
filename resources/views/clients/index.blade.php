@extends('main')
@section('content')   
    <div class="container px-4 pt-5">
        <h4 class="pb-2 text-light">Clientes Pagantes</h4>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-8">
            <table id="LeadTable" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Empresa</th>
                        <th>Tags</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $lead)
                    <tr>
                        <td>{{ $lead->id }}</td>
                        <td>{{ $lead->nome }} {{ $lead->sobrenome }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->empresa }}</td>
                        <td>
                        @foreach(explode(',', $lead->tags) as $tag)
                        <span class="badge text-bg-primary">{{ $tag }}</span>
                        @endforeach
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route("leadsEdit", $lead->id) }}" class="btn btn-primary">Editar</a>
                                <a href="{{ route("leadsDelete", $lead->id) }}" class="btn btn-danger">Deletar</a>
                              </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
