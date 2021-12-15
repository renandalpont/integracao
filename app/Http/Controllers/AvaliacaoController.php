<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao; 
use App\Models\Local;

class AvaliacaoController extends Controller
{
    public function show(){
        $avaliacoes = Avaliacao::all();
        return view('avaliacoes.todos', ['avaliacoes' => $avaliacoes]);
    }
    public function destroy($id){
        $avaliacao = Avaliacao::findOrFail($id);
        $avaliacao -> delete();
        return $this->show();
    }
    public function store(Request $request){;
        /*dd($request);exit;*/      
        /*$avaliacoes = Avaliacao::all();*/        
        $local = Local::findOrFail($request->id);
        Avaliacao::create([
            'nr_nota' => $request->nr_nota,
            'ds_avaliacao' => $request->ds_avaliacao,
            'nm_usuario' => $request->nm_usuario,
            'cd_local' => $request->cd_local,
        ]);
        $avaliacoes = Avaliacao::where('cd_local',$request->cd_local)->get();
        /*dd($request);exit;*/
        return view('site.comentar', ['local' => $local, 'avaliacoes' => $avaliacoes]);
    }    
}
