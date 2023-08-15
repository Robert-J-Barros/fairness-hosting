<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function whoAre() {
        return view('whoAre');
    }
}
