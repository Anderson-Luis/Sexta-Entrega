<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lista;

class ListaController extends Controller
{
    public function index() {
        $lista = Lista::all();

        return view('welcome', ['lista' => $lista]);
    }

    public function store(Request $request) {
        $lista = new Lista;

        $lista->nome = $request->nome;
        $lista->numero = $request->numero;
        $lista->id = $request->id;
      
        $lista->save();

        return redirect('/');
    }

    public function consulta() {
        $lista = Lista::all(); 

        return view('consulta',['lista' => $lista]);
    }    

    public function editar() {
        $lista = Lista::all(); 

        return view('editar',['lista' => $lista]);
    }    

    public function edit($id) {
        $lista = Lista::find($id);
        
        return view('editar',['lista' => $lista]);
    }

    public function update(Request $request, $id) {
        $lista = Lista::findOrFail($id);

        //$lista = Lista::find($id);

        $lista->update([
            'nome' => $request->nome,
            'numero' => $request->numero
        ]);

        return redirect('consulta.blade.php');       
    }    

    public function deletar($id) {
        $lista = Lista::findOrFail($id)->delete();

        return redirect('consulta.blade.php');
    }   
}
