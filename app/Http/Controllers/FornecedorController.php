<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {

        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00', 'ddd' => '', 'telefone' => '0000-0000'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => null, 'ddd' => '13', 'telefone' => '0000-0000'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'S', 'cnpj' => null, 'ddd' => '85', 'telefone' => '0000-0000']
        ];
        
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
