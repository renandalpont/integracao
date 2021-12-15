@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Estados<h1/>
@stop

@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('atualizar_estado', ['id' => $estado->id]) }}"  method="post">
               @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="nm_estado">Estado</label>
                    <input type="text" name="nm_estado" id="nm_estado" value="{{$estado->nm_estado}}" placeholder="Digite o nome do estado..">
                  </div>
                </div> 
                                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop