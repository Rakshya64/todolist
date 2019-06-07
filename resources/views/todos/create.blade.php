@extends('layout.app')

@section('content')

    <div style="padding-top:70px"></div>
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText ('text')}}
        {{ Form::bsTextArea ('body')}}
        {{ Form::bsText ('due')}}
        {{ Form::bsSubmit ('Submit', ['class' => 'btn btn-primary'])}}



    {!! Form::close()!!}

@endsection

