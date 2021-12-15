@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
      <style>
        #imagem-central{
          width:400px;
          height:400px;
          border-radius:50%;
          margin:auto;
          margin-left:555px;
          margin-top:70px;
          margin-bottom:70px;
        }

        #lista{
          text-decoration: none;
          width:70%;
          margin-left:15%;
        }

        #lista ul li h3{

          text-decoration:none;
        }

        #listaa{
          text-align: center;
          text-decoration:none;
          color:black;
          font-size:20px
        }
        #listaaa{
          text-align: center;
          text-decoration:none;
          color:black;
          font-size:20px
        }


        #card{
          width:70%;
          margin-left:15%;
        }

        #botao{
          width:10%;
          margin-left:45%;
          margin-top:25px;
        }

        #nomelocal{
          font-size:60px;
        }
        #categoria{
          font-size:40px;
          text-align:center;
          margin-bottom:60px;
        }

        

      </style>
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" id="imagem-central" src="{{$local->img_link}}" alt="User profile picture">

              <h3 class="profile-username text-center" id="nomelocal">{{$local->nm_local}}</h3>

              <p  id="categoria">{{$local->cd_categoria}}</p>

              <ul class="list-group list-group-unbordered" id="lista">
                <li class="list-group-item">
                  <b></b> <h4 class="pull-right">{{$local->ds_local}}</h4>
                </li>
                <li class="list-group-item">
                  <b></b> <a class="pull-right" id="listaa">{{$local->ds_endereco}}, {{$local->cd_cidade}} - {{$local->cd_estado}}</a>
                </li>
                <li class="list-group-item">
                  <b></b> <a class="pull-right" id="listaaa">{{$local->ds_tarifa}}</a>
                </li>
          
              </ul>
            </div>





            <div class="card-body" id="card">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected="" disabled="">Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <td>
                    <button type="button" id="botao" class="btn btn-block btn-success">Success</button>
                  </td>
            </div>

               

           
         

@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop