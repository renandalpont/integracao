<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Estado;


class CidadesController extends Controller
{
    public function create(){
        $estados = Estado::all();
        return view('cidades.create', ['estados' => $estados]);
    }
    public function store(Request $request){
        Cidade::create([
            'nm_cidade' => $request->nm_cidade,
            'cd_estado' => $request->cd_estado,
        ]);
        return $this->show();
    }
    public function show(){
        $cidades = Cidade::all();
        return view('cidades.todos', ['cidades' => $cidades]);
    }
    public function destroy($id){
        $cidade = Cidade::findOrFail($id);
        $cidade->delete();
        return $this->show();
    }
    public function edit($id){
        $estados = Estado::all();
        $cidade = Cidade::findOrFail($id);
        return view('cidades.editar', ['cidade' => $cidade, 'estados' => $estados]);
    }
    public function update(Request $request, $id){
        $cidade = Cidade::findOrFail($id);
        $cidade->update([
           'nm_cidade' => $request->nm_cidade,
           'cd_estado' => $request->cd_estado,
        ]);
        return $this->show();
    }
}

