<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeModel;

class TestController extends Controller
{
    public function envia_teste(Request $request){

    $data= [
            "Corinthians" => "Campeao",
            "numero" => $request ->numero
        ];

    return response()->json($data,200);
    }
   



public function soma(Request $request){

    $data= [
            "soma" => $request ->numero + $request ->numero_dois
        ];

    return response()->json($data,200);
    }
    

    
    public function salva_times(Request $request){

    $request->validate([
        'times'=>'required',
        'numero'=>'required',
        'jogador'=>'required',
        'posicao'=>'required'
    ]);
    
    
    try {
        $time = new TimeModel();
        $time->posicao = $request->posicao;
        $time->numero = $request->numero;
        $time->times = $request->times;
        $time->jogador = $request->jogador;

        $time->save();

        $data =[
            'msg' => 'time salvo',
            'times' => $time
        ];

        return response()->json($data,200);



    } catch (\Throwable $th) {
        throw $th;
    }
    
    
    
    }


    
    public function exibe_times($id){
        $time = TimeModel::find($id);

         $data =[
            'msg' => 'time salvo',
            'times' => $time
        ];

        return response()->json($data,200);


    }

    public function todos_times(Request $request){
         $time = TimeModel::get()->all();

         $data =[
            'msg' => 'time salvo',
            'times' => $time
        ];

        return response()->json($data,200);

    }

}








        

    

