<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BaseController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => false ]);
        // $response = Http::get('https://api.pakketdienstqls.nl/company/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/product');
        $response = Http::withBasicAuth('frits@test.qlsnet.nl', '4QJW9yh94PbTcpJGdKz6egwH')
        ->get('https://api.pakketdienstqls.nl/company/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/product');
        var_dump($response);
        return view('welcome');
    }
}
