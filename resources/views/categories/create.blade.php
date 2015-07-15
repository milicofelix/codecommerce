<!--
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/07/15
 * Time: 22:23
 */-->
@extends('app')
@section('content')

<div class="container">
    @if($errors->any())

        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif
    <h1>Cadastro de Categorias</h1>
    {!! Form::open(['route'=>'categories.cad']) !!}
    <div class="form-group">
        {!! Form::label('cat_name','Nome:') !!}
        {!! Form::text('cat_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cat_description','Descrição:') !!}
        {!! Form::textarea('cat_description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Adicionar Categoria',['class'=>'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

</div>
@endsection