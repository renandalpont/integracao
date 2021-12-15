@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Criar Locais<h1/>
@stop

@section('content')

            <form action="{{ route('atualizar_local', ['id' => $local->id]) }}"  method=post>
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nm_local">Nome</label>
                    <input type="text" name="nm_local" class="form-control" id="nm_local" value="{{$local->nm_local}}" placeholder="Digite o nome do ponto turístico">
                  </div>
                  <div class="form-group">
                    <label for="ds_local">Descrição</label>
                    <textarea class="form-control" name="ds_local" id="ds_local" placeholder="Digite a descrição dos atrativos..">{{$local->ds_local}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="ds_tarifa">Tarifa</label>
                    <textarea class="form-control" name="ds_tarifa" id="ds_tarifa" placeholder="Digite as tarifas do local..">{{$local->ds_tarifa}}</textarea>
                  </div>

                  <select for="pg_entrada"  name="pg_entrada" class="custom-select">
                    <option value="{{$local->pg_entrada}}" selected>Paga entrada?</option>
                    <option id="pg_entrada" value="S">Sim</option>
                    <option id="pg_entrada" value="N">Não</option>
                 </select>
                  
                  
                  <div class="form-group">
                    <label for="ds_endereco">Endereço</label>
                    <input type="text" name="ds_endereco" class="form-control" id="ds_endereco" value="{{$local->ds_endereco}}" placeholder="Digite o nome da rua">
                  </div>

                  <div class="form-group">
                    <label for="ds_endereco">Imagem</label>
                    <input type="text" name="img_link" value="{{$local->img_link}}" class="form-control" id="ds_endereco" placeholder="Digite o link da imagem">
                  </div>


                  <select name="cd_cidade" class="custom-select" >
                    <option value="{{$local->cd_cidade}}" selected>Selecione a cidade</option>
                    @foreach($cidades as $cidade)
                    <option value="{{$cidade->nm_cidade}}">{{$cidade->nm_cidade}}</option>
                  @endforeach    
                 </select>
                 <select name="cd_estado" class="custom-select" >
                    <option value="{{$local->cd_estado}}" selected>Selecione o estado</option>
                    @foreach($estados as $estado)
                    <option value="{{$estado->nm_estado}}">{{$estado->nm_estado}}</option>
                  @endforeach    
                 </select>
                 <select name="cd_categoria" class="custom-select" >
                    <option value="{{$local->cd_categoria}}" selected>Selecione a categoria</option>
                  @foreach($categorias as $categoria)
                    <option value="{{$categoria->nm_categoria}}">{{$categoria->nm_categoria}}</option>
                  @endforeach    
                 </select>
            
            

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop