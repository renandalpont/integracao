<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado; // inseri o uso

class EstadosController extends Controller
{
    public function create(){
        return view('estados.create');
    }
    public function store(Request $request){
        Estado::create([
            'nm_estado' => $request->nm_estado,
        ]);
        return $this->show();
    }
    public function show(){
        $estados = Estado::all();
        return view('estados.todos', ['estados' => $estados]);
    }
    public function destroy($id){
        $estado = Estado::findOrFail($id);
        $estado->delete();
        return $this->show();
    }
    public function edit($id){
        $estado = Estado::findOrFail($id);
        return view('estados.editar', ['estado' => $estado]);
    }
    public function update(Request $request, $id){
        $estado = Estado::findOrFail($id);
        $estado->update([
           'nm_estado' => $request->nm_estado,
        ]);
        return $this->show();
    }
}
