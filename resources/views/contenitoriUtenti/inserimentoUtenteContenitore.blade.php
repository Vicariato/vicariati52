@extends('layout')
@section('contentHeader')
@include('layoutHeader')
@stop

@section('content')

{!! HTML::ul($errors->all(), array('class'=>'errors'))!!}
<div class="container">
    <div class="row">
        {!! Form::open(['url'=> 'saveCreateUtenteContenitore', 'class' => 'form-horizontal', 'id' => 'myForm']) !!}

        <div class="form-group">
            {!! Form::label('aaaa', 'User:', ['class'=>'col-sm-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::select('id_user', array('default' => 'Seleziona...')+$usersCombo, null ) !!}  
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('aaaa', 'Contenitore:', ['class'=>'col-sm-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::select('id_contenitore', array('default' => 'Seleziona...')+$contenitoriCombo, null ) !!}  
            </div>
        </div>


        <div class="form-group" style="margin-top:-10px;">
            {!! Form::label('', '', ['class'=>'col-sm-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::submit('Salva', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>

        {!! Form::close() !!}

    </div>

    @stop







