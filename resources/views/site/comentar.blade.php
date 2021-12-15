@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestão de Locais Turísticos</h1>
@stop

@section('content')

            <div class="card card-info card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Explore <small>e avalie</small>
                </h3>
              </div>
              <div class="card-body">
                
                <img src="{{$local->img_link}}" class="img-fluid img-thumbnail rounded mx-auto d-block" alt="img_link">
              
                <div class="bd-example">
                  <table class="table">
                    <thead>
                      <tr>                   
                        <th scope="col">Categoria</th>
                        <th scope="col">Local</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Tarifa</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$local->cd_categoria}}</td>
                        <td>{{$local->nm_local}}</td>
                        <td>{{$local->ds_local}}</td>
                        <td>{{$local->ds_endereco}}</td>
                        <td>{{$local->cd_cidade}}</td>
                        <td>{{$local->cd_estado}}</td>
                        <td>{{$local->ds_tarifa}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>





                <div class="bd-example">
                  <form action="{{route('salvar_avaliacao') }}"  method=post>
                   @csrf 
                    <div class="form-group">
                      <label for="exampleFormControlInput1"></label>
                      <input type="text" class="form-control" id="exampleFormControlInput1"  name="nm_usuario" placeholder="Digite seu nome..">
                    </div>

                    
                    <div class="form-group">
                      <label  name="nr_nota" for="exampleFormControlSelect1">Avalie o local</label>
                      <select name="nr_nota" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Ruim</option>
                        <option value="2">Regular</option>
                        <option value="3">Bom</option>
                        <option value="4">Ótimo</option>
                        <option value="5">Incrível</option>
                      </select>
                    </div>


                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Comentário</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1"  name="ds_avaliacao" rows="3"></textarea>
                    </div>


                    <div class="form-group">
                      <input type="hidden" class="form-control" id="exampleFormControlInput1"  name="cd_local" value="{{$local->nm_local}}">
                    </div>

                    <div class="form-group">
                      <input type="hidden" class="form-control" id="exampleFormControlInput1"  name="id" value="{{$local->id}}">
                    </div>

                    <div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                 
                  </form>

                </div>
              </div>


              <div class="card-footer">
                  <h3 class="display-4 mb-4">Comentários</h3>
                  <hr>
                  @foreach($avaliacoes as $avaliacao)
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <b>{{$avaliacao->nm_usuario}}</b>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="username">
                          <b>| Avaliação: {{$avaliacao->nr_nota}}</b>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <br>
                        <span class="description text-black-50">
                          <small>{{$avaliacao->created_at}}</small>
                        </span>
                      </div>
                      

                      <p class="mt-2 text-secondary">
                        {{$avaliacao->ds_avaliacao}}
                      </p>
                    </div>

                    <hr>
                  @endforeach 

                    
              </div>
            </div>

@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
