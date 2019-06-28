@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-default">
                   Crear cliente
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="first_name" >{{ __('Primer nombre')}}</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Ingrese Primer nombre" value="">
                        </div>

                        <div class="form-group">
                            <label for="second_name">{{ __('Segundo nombre')}}</label>
                            <input type="text" class="form-control" name="second_name" id="second_name" placeholder="Ingrese Segundo nombre" value="">
                        </div>

                        <div class="form-group">
                            <label for="father_name">{{ __('Apellido paterno')}}</label>
                            <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Ingrese Apellido paterno" value="">
                        </div>

                        <div class="form-group">
                            <label for="mother_name">{{ __('Apellido materno')}}</label>
                            <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Apellido materno" value="">
                        </div>

                        <div class="form-group">
                            <label for="ci">{{ __('CI')}}</label>
                            <input type="text" class="form-control" name="ci" id="ci" placeholder="Ingrese CI" value="">
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Teléfono')}}</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Ingrese Teléfono" value="">
                        </div>

                        <div class="form-group">
                            <label for="gender">{{ __('Género')}}</label>
                            <select name="gender" class="form-control">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="birthday">{{ __('Fecha de nacimiento')}}</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Ingrese Fecha de nacimiento" value="">
                        </div>

                        <div class="form-group">
                            <label for="status">{{ __('Estado')}}</label>
                            <select name="status" class="form-control">
                                <option value="Activo">Activo</option>
                                <option value="No activo">No activo</option>
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
