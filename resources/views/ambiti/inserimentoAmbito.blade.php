@extends('layout')
@section('contentHeader')
@include('layoutHeader')
@stop

@section('content')

{!! HTML::ul($errors->all(), array('class'=>'errors'))!!}
<div class="container">
    <div class="row">
        {!! Form::open(['url'=> 'saveCreateAmbito', 'class' => 'form-horizontal', 'id' => 'myForm']) !!}

        <div class="form-group">
            {!! Form::label(null, 'Nome:', ['class'=>'col-sm-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('nome', Input::old('nome'), ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('aaaa', 'Parrocchia:', ['class'=>'col-sm-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::select('id_parrocchia', array('default' => 'Seleziona...')+Session::get('parrocchieCombo'), null, array('id'=>'selezioneParrocchia') ) !!}  
            </div>
        </div>

        <div class="form-group" style="margin-top:-10px;">
            {!! Form::label('aaaa', 'Pubblica Prima Pagina:', ['class'=>'col-sm-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::checkbox('pubblica_prima_pagina', true, true) !!} 
            </div>
        </div>

        <div class="form-group">
            {!! Form::label(null, ' (Opzionale) Link:', ['class'=>'col-sm-2 control-label']) !!}
            <div class="form-inline col-md-10">
                {!! Form::text('link_diretto_1', Input::old('link_diretto_1'), ['class'=>'col-md-5']) !!}
                {!! Form::label(null, ' Testo:', ['class'=>'col-md-1 control-label']) !!}
                {!! Form::text('label_link_diretto_1', Input::old('label_link_diretto_1'), ['class'=>'col-md-6']) !!}
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







