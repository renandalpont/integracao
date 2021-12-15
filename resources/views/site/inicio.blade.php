@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestão de Locais Turísticos</h1>
@stop

@section('content')



<div class="card-body pb-0">
          <div class="row">  
          @foreach($locais as $local)        
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column mb-4">
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
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Endereço: {{$local->ds_endereço}}, {{$local->cd_cidade}}, {{$local->cd_estado}}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Tarifa : {{$local->ds_tarifa}}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{$local->img_link}}" alt="img_link" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <!--a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Comentar
                    </a-->
                    <a class="btn btn-primary btn-sm" title="Avaliar local" href="{{ route('avaliar_local', ['id'=>$local->id])}}">
                        <i class="fas fa-trash">
                        </i>
                        Comentar
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>




@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



