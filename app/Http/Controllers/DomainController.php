<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index(Request $request) 
    {
 
        $data = [
            'texto' => $request->txt,
        ];
        
        return view('index',$data);
    }

    public function whoAre() 
    {
        return view('whoAre');
    }

    public function generalLogin() 
    {
        return view('generalLogin');
    }
}
