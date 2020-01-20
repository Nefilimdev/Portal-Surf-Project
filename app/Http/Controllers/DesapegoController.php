<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DesapegoController extends Controller
{


     protected function create(Request $request){
        return Desapego::create([
            
            'segment' => $request['ofertaSegmento'],
            'typeEquipament' => $request['ofertaTipo'],
            'stateProduct' => $request['ofertaEstProduto'],
            'titleProduct' => $request['ofertaTitulo'],
            'descriptionProduct' => $request['ofertaDescr'],
            'priceProduct' => $request['ofertaPreco'],
            'withdrawalState' => $request['ofertaEstado'],
            'withdrawalCity' => $request['ofertaCidade'],
            'programaCarona' => $request['ofertaBairro'],
            'imgProduct' => $request['imgProduto'],
          
        ]);
    }

        
  

    protected $redirectTo = '/desapegoOfertasUsuario';


    public function viewDesapego(Request $request){
        return view('desapego');
    }

    public function viewDesapegoCadastroOferta(Request $request){
        return view('desapegoCadastroOferta');
    }

    public function viewDesapegoOfertasUsuario(Request $request){
        return view('desapegoOfertasUsuario');
    }

    public function viewDesapegoOfertaIndividual(Request $request){
        return view('desapegoOfertaIndividual');
    }

    

}
