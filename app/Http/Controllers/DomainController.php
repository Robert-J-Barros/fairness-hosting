<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index(Request $request) 
    {   
        return view('index');
    }

    public function whoAre() 
    {
        return view('whoAre');
    }

    public function generalLogin() 
    {
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Lucas',
                'birth' => '20/08/57',
                'idade' => 37
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Portuguesa',
                'birth' => '10/11/84',
                'idade' => 40
            ],
        ];

        $dados['pessoas'] = $pessoas;

        return view('generalLogin', $dados);
    }
}
