<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function create(){
        return view('categorias.create');
    }
    public function store(Request $request){
        Categoria::create([
            'nm_categoria' => $request->nm_categoria,
        ]);
        return $this->show();
    }   
    public function show(){
        $categorias = Categoria::all();
        return view('categorias.todos', ['categorias' => $categorias]);
    }
    public function destroy($id){
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return $this->show();
    }
    public function edit($id){
        $categoria = Categoria::findOrFail($id);
        return view('categorias.editar', ['categoria' => $categoria]);
    }
    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->update([
           'nm_categoria' => $request->nm_categoria,
        ]);
        return $this->show();
    }
}
