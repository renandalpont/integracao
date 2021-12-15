@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<style>
  #teste{
    float:left;
    width:500px;
    height:600px;
    margin-left:150px;
    margin-bottom:50px;
  }

  .col-12{
    width: 100%;
  }
</style>

  <div  class="card-body pb-0">
    @foreach($locais as $local)
        <div class="row" mb=1 id="teste">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  {{$local->cd_categoria}}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$local->nm_local}}</b></h2>
                      <p class="text-muted text-sm"><b>Descrição: </b> {{$local->ds_local}} </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: {{$local->ds_endereco}}, {{$local->cd_cidade}}, {{$local->cd_estado}}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Tarifas: {{$local->ds_tarifa}}</li>
                      </ul>
                    </div>
                    <img src="{{$local->img_link}}" class="img-circle img-fluid">
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <!--a href="local\avaliar{}" type="submit" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Comentar
                    </a-->
                    <a class="btn btn-info btn-sm" title="Editar local" 
                      href="{{ route('avaliar_local', ['id'=>$local->id])}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Comentar
                    </a>
                  </div>
                </div>
              </div>
            </div>
         </div>
        
    @endforeach        
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
