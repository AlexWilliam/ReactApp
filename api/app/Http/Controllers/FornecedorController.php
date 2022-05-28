<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller {
    
    public function index(){

        $fornecedores = [
            0 => [
                "Nome" => "Fornecedor 1",
                "Status" => "S",
                "CNPJ" => "00.000.000/0000-00",
                "DDD" => "90", // SP
                "Telefone" => "99999-9999"
            ],
            1 =>[
                "Nome" => "Fornecedor 2",
                "Status" => "N",
                "CNPJ" => "00.000.000/0000-01",
                "DDD" => "87", // RJ
                "Telefone" => "99999-9999"
            ],
            2 =>[
                "Nome" => "Fornecedor 3",
                "Status" => "N",
                "CNPJ" => "00.000.000/0000-02",
                "DDD" => "84", // RS
                "Telefone" => "99999-9999"
            ]
        ];

        return view("app.fornecedor.index", compact("fornecedores"));
    }
}
