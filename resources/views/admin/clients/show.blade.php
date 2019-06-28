@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-default">
                   Ver cliente
                </div>
                <div class="card-body">
                    <p><strong>Nombre completo: </strong>{{ $client->father_name }} {{ $client->mother_name }} {{ $client->first_name }} {{ $client->second_name }}</p>
                    <p><strong>CI: </strong>{{ $client->ci }}</p>
                    <p><strong>Género: </strong>{{ $client->gender }}</p>
                    <p><strong>Fecha de cumpleaños: </strong>{{ $client->birthday }}</p>
                    <p><strong>Teléfono: </strong>{{ $client->phone }}</p>
                    <p><strong>Estado: </strong>{{ $client->status }}</p>
                    <p><strong></strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
