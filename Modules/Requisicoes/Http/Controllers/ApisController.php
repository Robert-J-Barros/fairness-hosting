<?php

namespace Modules\Requisicoes\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class ApisController extends Controller
{
    public function consultDomains()
    {
        $headers = [
            'Authorization' => 'sso-key 3mM44UdB6E6XbN_4wgpAzm17mzYjf7Vp6Bomi:E4exLr6KvmHQRsfm8PcW5F',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
        
        $data = [
            'Browseimoveis.com'
        ];
        
        // Faça a chamada à API usando o HTTP client do Laravel
        $response = Http::withHeaders($headers)
            ->post(env('CONSULT_DOMAIN_API'), $data);
        
        // Obtenha e imprima a resposta da API
        $jsonResponse = $response->body();
        echo $jsonResponse;
    }
}
