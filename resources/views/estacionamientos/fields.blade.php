<!--- Identificador Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('identificador', 'Identificador:') !!}
    {!! Form::text('identificador', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
