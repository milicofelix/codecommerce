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
    <h1>Categorias</h1>

    <a href="{{route('categories.form')}}" class="btn btn-success">Cadastrar Categoria</a><br /><br />

    <table class="table">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->cat_id}}</td>
                <td>{{$category->cat_name}}</td>
                <td>{{$category->cat_description}}</td>
                <td><a href="{{ route('categories.destroy',['id'=>$category->cat_id]) }}" class="btn btn-danger" >Remover</a></td>
            </tr>

        @endforeach
    </table>
</div>
@endsection