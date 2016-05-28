@extends('layout')
@section('contentHeader')
@include('layoutHeader')
@stop

@section('content')
<section class="header section-padding">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="header-text">
             <p>
                Cancellazione Bollettino
            </p>
        </div>
    </div>
</section>

<div class="container">
    <section class="section-padding">
        <div class="jumbotron text-center">
            <h3>Si desidera cancellare il bollettino <br> {!! $bollettino->title !!}? </h3>

            {!! Form::open(['url'=> 'deleteBollettino', 'class'=>'form']) !!}
            {!! Form::hidden('id', $bollettino->id)!!}

            <div class="form-group">
                {!! Form::submit('Cancella', ['class' => 'btn btn-primary']) !!}
                <a href="{!! URL::to('home') !!}"
                   class="btn btn-danger"> No </a>
            </div>

            {!! Form::close() !!}

        </div>
    </section>
</div>
@stop