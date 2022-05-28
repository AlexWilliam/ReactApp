<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get("/teste/{p1}/{p2}", "TesteController@teste")->name("site.teste");

/*Route::get('/', function () {
    return 'Olá, seja bem-vindo ao laravel!';
});*/

Route::get("/", "PrincipalController@principal")->name("site.index");
Route::get("/sobre-nos", "SobreNosController@sobreNos")->name("site.sobrenos");
Route::get("/contato", "ContatoController@contato")->name("site.contato");
Route::get("/login", function(){ return "Login"; })->name("site.login");
/*
Route::get("/rota1", function(){ 
    return "Rota 1"; 
})->name("site.rota1");
Route::get("/rota2", function(){ 
    return redirect()->route("site.rota1");
})->name("site.rota2");*/

//Route::redirect("/rota2", "/rota1");
// /admin
Route::prefix("/admin")->group(function(){    
    Route::get("/", function(){ return "admin"; })->name("admin");
    Route::get("/clientes", function(){ return "clientes"; })->name("admin.clientes");
    Route::get("/fornecedores", "FornecedorController@index");
    Route::get("/produtos", function(){ return "produtos"; })->name("admin.produtos");

    Route::fallback(function(){
        return redirect()->route("site.index");
    });    
});

Route::fallback(function(){
    return redirect()->route("site.index");
});

/*// nome, categoria, assunto, mensagem
Route::get("/contato/{nome?}/{idCategoria?}", 
    function(string $nome="Desconhecido", int $idCategoria=1){
        echo "Estamos aqui! Bem-vindo {$nome}. Sua categoria {$idCategoria}!";
    }
);
// nome, categoria, assunto, mensagem
Route::get("/contato/{nome}/{idCategoria}", 
    function(
        string $nome="Desconhecido",
        int $idCategoria=1
    ){
        echo "Estamos aqui! Bem-vindo {$nome}. Sua categoria {$idCategoria}!";
    }
)->where('nome', '[A-Za-z]+')->where("idCategoria", "[0-9]+");
// Route::get($uri, $callback);*/

/* verbo http

get
post
put
patch
delete
options

*/