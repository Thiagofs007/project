<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            'Fornecedor1',
            'Fornecedor2',
            'Fornecedor3',
            'Fornecedor4',
            'Fornecedor5',
            'Fornecedor6',
            'Fornecedor7',
            'Fornecedor8',
            'Fornecedor9',
        ];
        /*return view('app.fornecedor.index', compact('fornecedores'));*/
        return view('site.fornecedor', compact('fornecedores')); 
    }
}
