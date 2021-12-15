@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Avaliacões<h1/>
@stop

@section('content')



<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Lista de avaliações</h3>

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
                    Local
                </th>          
                <th style="width: 20%">
                    Nota
                </th> 
                <th style="width: 20%">
                    Descrição avaliação
                </th>               
            </tr>
        </thead>
        <tbody>
         @foreach($avaliacoes as $avaliacao)
            <tr>
                <td>
                    {{$avaliacao->id}}
                </td>
                <td>
                    <a>
                      {{$avaliacao->cd_local}}
                    </a>
                    <br>
                    <small>
                    Created {{$avaliacao->created_at}}
                    </small>
                </td>    
                <td>
                    {{$avaliacao->nr_nota}}
                </td>     
                <td>
                    {{$avaliacao->ds_avaliacao}}
                </td>     
                <td class="project-actions text-right">
                    <a class="btn btn-danger btn-sm" title="Excluir estado" href="{{ route('excluir_avaliacao', ['id' => $avaliacao->id ])}}">
                        <i class="fas fa-trash">
                        </i>
                        Deletar
                    </a>
                </td>
            </tr>
          @endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop