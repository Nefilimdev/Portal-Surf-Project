<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
  public function viewNoticias(Request $request){
      return view('noticias');
}

}
