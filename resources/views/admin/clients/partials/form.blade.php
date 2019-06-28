<div class="form-group">
    {{ Form::label('first_name', 'Primer nombre') }}
    {{ Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first_name']) }}
</div>
<div class="form-group">
    {{ Form::label('second_name', 'Segundo nombre') }}
    {{ Form::text('second_name', null, ['class' => 'form-control', 'id' => 'second_name']) }}
</div>
<div class="form-group">
    {{ Form::label('father_name', 'Apellido paterno') }}
    {{ Form::text('father_name', null, ['class' => 'form-control', 'id' => 'father_name']) }}
</div>
<div class="form-group">
    {{ Form::label('mother_name', 'Apellido materno') }}
    {{ Form::text('mother_name', null, ['class' => 'form-control', 'id' => 'mother_name']) }}
</div>
<div class="form-group">
    {{ Form::label('ci', 'CI') }}
    {{ Form::text('ci', null, ['class' => 'form-control', 'id' => 'ci']) }}
</div>
<div class="form-group">
    {{ Form::label('phone', 'Teléfono') }}
    {{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone']) }}
</div>
<div class="form-group">
    {{ Form::label('gender', 'Género') }}
    {{ Form::select('gender', array('Femenino' => 'Femenino', 'Masculino' => 'Masculino'), ['class' => 'form-control', 'id' => 'gender']) }}
</div>
<div class="form-group">
    {{ Form::label('birthday', 'Fecha de nacimiento') }}
    {{ Form::text('birthday', null, ['class' => 'form-control', 'id' => 'birthday']) }}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado') }}
    {{ Form::select('status', array('Activo' => 'Activo', 'No activo' => 'No activo'), ['class' => 'form-control', 'id' => 'status']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
