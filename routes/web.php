<?php

use Illuminate\Support\Facades\Route;

use App\Models\Cadastro;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar1', function () {
    return view('cadastrar1');
});

//cadastrar outra rota para verificar info//
Route::post('/cadastrar',function(Request $request){
    
    //mostrar todas informaçoes que estão chegando //
    //dd ->função laravel
    //debug or die // parar aplicação//

   // dd($request->all());

    //criar informaçaões vinculada ao Model para o banco de dados//

    Cadastro::create([

      'nome'=> $request -> nome,
      'email' =>$request -> email,
      'senha'=> $request ->senha


    ]);

    echo " Cadastrado com sucessso";

});
