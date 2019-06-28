@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-default">
                     Lista de cliente
                    <a href="{{route('clients.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
                    <div class="col-md-3">
                    <form action="/search" method="get">
                        <div class="input-group">
                        <input type="search" name="search" class="form-control">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">
                                Buscar
                            </button>
                        </span>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre completo</th>
                                <th>CI</th>
                                <th>Género</th>
                                <th>Fecha de nacimiento</th>
                                <th>Telefóno</th>
                                <th>Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->father_name }} {{ $client->mother_name }} {{ $client->first_name }} {{ $client->second_name }}</td>
                                <td>{{ $client->ci }}</td>
                                <td>{{ $client->gender }}</td>
                                <td>{{ $client->birthday }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->status }}</td>
                                <td>
                                    <a href="{{ route('clients.show', $client->id ) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td>
                                    <a href="{{ route('clients.edit', $client->id ) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $clients->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
