@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-default">
                   Editar cliente
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('clients.update', $client->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="first_name" >{{ __('Primer nombre')}}</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Ingrese Primer nombre" value={{ $client->first_name }}>
                        </div>

                        <div class="form-group">
                            <label for="second_name">{{ __('Segundo nombre')}}</label>
                            <input type="text" class="form-control" name="second_name" id="second_name" placeholder="Ingrese Segundo nombre" value={{ $client->second_name }}>
                        </div>

                        <div class="form-group">
                            <label for="father_name">{{ __('Apellido paterno')}}</label>
                            <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Ingrese Apellido paterno" value={{ $client->father_name }}>
                        </div>

                        <div class="form-group">
                            <label for="mother_name">{{ __('Apellido materno')}}</label>
                            <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Apellido materno" value={{ $client->mother_name }}>
                        </div>

                        <div class="form-group">
                            <label for="ci">{{ __('CI')}}</label>
                            <input type="text" class="form-control" name="ci" id="ci" placeholder="Ingrese CI" value={{ $client->ci }}>
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Teléfono')}}</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Ingrese Teléfono" value={{ $client->phone }}>
                        </div>

                        <div class="form-group">
                            <select name="gender" class="form-control">
                                <option value={{ $client->gender }}>Masculino</option>
                                <option value={{ $client->gender }}>Femenino</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="birthday">{{ __('Fecha de nacimiento')}}</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Ingrese Fecha de nacimiento" value={{ $client->birthday }}>
                        </div>

                        <div class="form-group">
                            <select name="status" class="form-control">
                                <option value={{ $client->status }}>Activo</option>
                                <option value={{ $client->status }}>No activo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
