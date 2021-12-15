@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Criar Categoria<h1/>
@stop

@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Inserir Nova</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('salvar_categoria') }}"  method="post">
               @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="nm_categoria">Categoria</label>
                    <input type="text" name="nm_categoria" id="nm_categoria" placeholder="Digite o nome da categoria..">
                  </div>
                </div> 
                                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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