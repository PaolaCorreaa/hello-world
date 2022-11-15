<div class="form-group">
{{Form::label('name','Nombre')}}
{{Form::text('name',null,['class'=>'form-control'])}}
{{Form::label('Apellido','Apellido')}}
{{Form::text('Apellido',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
  
{{Form::label('Avatar','Avatar')}}
{{Form::file('avatar')}}
</div>
