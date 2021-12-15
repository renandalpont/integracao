
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Estados<h1/>
  <td>
    <a href="novo">
      <button type="button" class="btn btn-block btn-success btn-lg col-2">+ Inserir novo </button>
    </a>
  </td>
@stop

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Lista de estados</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    Estado
                </th>              
            </tr>
        </thead>
        <tbody>
         @foreach($estados as $estado)
            <tr>
                <td>
                    {{$estado->id}}
                </td>
                <td>
                    <a>
                      {{$estado->nm_estado}}
                    </a>
                    <br>
                    <small>
                    Created {{$estado->created_at}}
                    </small>
                </td>              
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" title="Editar estado" href="{{ route('editar_estado', ['id'=>$estado->id])}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editar
                    </a>
                    <a class="btn btn-danger btn-sm" title="Excluir estado" href="{{ route('excluir_estado', ['id'=>$estado->id])}}">
                        <i class="fas fa-trash">
                        </i>
                        Deletar
                    </a>
                </td>
            </tr>
          @endforeach
</body>
</html>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
