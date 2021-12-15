@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Criar Avaliação<h1/>
@stop

@section('content')



<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Inserir Nova</h3>
              </div>


              @csrf
              <form action="{{route('salvar_avaliacao') }}"  method=post>
                   @csrf 
                    <div class="form-group">
                      <label for="exampleFormControlInput1"></label>
                      <input type="text" class="form-control" id="exampleFormControlInput1"  name="nm_usuario" placeholder="Digite seu nome..">
                    </div>

                    
                    <div class="form-group">
                      <label  name="nr_nota" for="exampleFormControlSelect1">Avalie o local</label>
                      <select name="nr_nota" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Fantástico</option>
                        <option value="2">Muito bom</option>
                        <option value="3">Bom</option>
                        <option value="4">Ruim</option>
                        <option value="5">Péssimo</option>
                      </select>
                    </div>


                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Comentário</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1"  name="ds_avaliacao" rows="3"></textarea>
                    </div>


                    <div class="form-group">
                      <input class="form-control" id="exampleFormControlInput1"  name="cd_local">
                    </div>


                    <div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
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