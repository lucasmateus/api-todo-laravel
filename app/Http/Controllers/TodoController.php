<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $tudo = Todo::orderby('id')->get();
        
        return response()->json($tudo);
    }

    public function listarAtivos()
    {
        $tudo = Todo::where('ativo', false)->orderby('id')->get();
        
        return response()->json($tudo);
    }
    
    public function listarCompletos()
    {
        $tudo = Todo::where('ativo', true)->orderby('id')->get();
        
        return response()->json($tudo);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'descricao' => 'required|string'
        ]);
        
        $todo = Todo::create($data);

        return response()->json($todo);
    }

    public function ativo($id)
    {

        $todo = Todo::find($id);
        
        if(isset($todo))
        {
            if($todo->ativo == false){
                $todo->ativo = true;
                $todo->save();    
            }else{
                $todo->ativo = false;
                $todo->save();
            }
        }
        
        return response()->json($todo);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $data = $this->validate($request,[
            'descricao' => 'required|string'
        ]);

        if(isset($todo)) $todo->update($data);

        return response()->json($todo);
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        if(isset($todo)){
            $todo->delete();
            return response()->json([
                "mensagem" => "Todo deletado"
            ], 200);
        } 

        return response()->json([
            "mensagem" => "Todo não encontrado"
        ],400);    
    }
}
