@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Cidades<h1/>
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
              <form action="{{ route('salvar_cidade') }}"  method="post">
               @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="nm_cidade">Cidade</label>
                    <input type="text" name="nm_cidade" id="nm_cidade" placeholder="Digite o nome da cidade..">
                  </div>
                </div> 
                <select name="cd_estado" class="custom-select" >
                    <option value="cd_estado" selected>Selecione o estado</option>
                    @foreach($estados as $estado)
                    <option >{{$estado->nm_estado}}</option>
                  @endforeach    
                 </select>
                                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop