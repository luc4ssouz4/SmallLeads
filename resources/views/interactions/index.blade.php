@extends('main')
@section('content')    
    <div class="container px-4 pt-5">
        <h4 class="pb-2 text-light">Interações com Leads</h4>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-8">
            <table id="LeadTable" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lead</th>
                        <th>Tipo</th>
                        <th>Nota</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $lead)
                    @php
                        // Listar usuario relacionado a interação
                        $user = $lead->find($lead->id)->leads;
                    @endphp                   
                    <tr>
                        <td>{{ $lead->id }}</td>
                        <td>{{ $user->nome }} {{ $user->sobrenome }}</td>
                        <td>{{ $lead->interacao }}</td>
                        <td>{{ $lead->nota }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route("leadsInteractionsDelete", $lead->id) }}" class="btn btn-danger">Deletar</a>
                              </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
