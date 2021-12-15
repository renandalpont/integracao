<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Categoria;
use App\Models\Avaliacao;



class LocalController extends Controller
{
    public function create(){
        $cidades = Cidade::all();
        $estados = Estado::all();
        $categorias = Categoria::all();
        return view('locais.create', ['cidades' => $cidades, 'estados' => $estados, 'categorias' => $categorias]);
    }
    public function store(Request $request){
        Local::create([
            'nm_local' => $request->nm_local,
            'ds_local' => $request->ds_local,
            'ds_endereco' => $request->ds_endereco,
            'ds_tarifa' => $request->ds_tarifa,
            'pg_entrada' => $request->pg_entrada,
            'cd_cidade' => $request->cd_cidade,
            'cd_estado' => $request->cd_estado,
            'cd_categoria' => $request->cd_categoria,
            'img_link' => $request->img_link,
        ]);
        return $this->show();      
    }
    public function show(){
        $locais = Local::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $categorias = Categoria::all();
        return view('locais.todos', ['locais' => $locais, 'cidades' => $cidades, 'estados' => $estados, 'categorias' => $categorias]);
    }
    public function destroy($id){
        $local = Local::findOrFail($id);
        $local->delete();
        return $this->show();
    }
    public function edit($id){
        $local = Local::findOrFail($id);
        $cidades = Cidade::all();
        $estados = Estado::all();
        $categorias = Categoria::all();
        return view('locais.editar', ['local' => $local, 'cidades' => $cidades, 'estados' => $estados, 'categorias' => $categorias]);
    }
    //
    public function avaliar($id){
        $local = Local::findOrfail($id);
        /*$avaliacoes = Avaliacao::findOrFail('cd_local',$id);*/
        $avaliacoes = Avaliacao::where('cd_local',$local->nm_local)->get();
        /*dd($avaliacoes);exit;*/
        return view('site.comentar',['local' => $local, 'avaliacoes' => $avaliacoes]);
        
    }
    //
    public function update(Request $request, $id){    
        $local = Local::findOrFail($id);
        $local->update([
           'nm_local' => $request->nm_local,
           'ds_local' => $request->ds_local,
           'ds_endereco' => $request->ds_endereco,
           'ds_tarifa' => $request->ds_tarifa,
           'pg_entrada' => $request->pg_entrada,
           'cd_cidade' => $request->cd_cidade,
           'cd_estado' => $request->cd_estado,  
           'cd_categoria' => $request->cd_categoria,  
           'img_link' => $request->img_link,
        ]);
        return $this->show();
    }
    public function showLocais(){
        $locais = Local::all();
        $cidades = Cidade::all();
        $estados = Estado::all();
        $categorias = Categoria::all();
        return view('site.inicio', ['locais' => $locais, 'cidades' => $cidades, 'estados' => $estados, 'categorias' => $categorias]);
    }
}

