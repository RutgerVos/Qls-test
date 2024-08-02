<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Spatie\LaravelPdf\Facades\Pdf;

class BaseController extends Controller
{
    public function index()
    {
        // Pdf::html('<h1>Hello world!!</h1>')->save('/some/directory/invoice.pdf');
        $client = new \GuzzleHttp\Client(['verify' => false ]);
        // $response = Http::get('https://api.pakketdienstqls.nl/company/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/product');
        $response = Http::withBasicAuth('frits@test.qlsnet.nl', '4QJW9yh94PbTcpJGdKz6egwH')
        ->get('https://api.pakketdienstqls.nl/companies/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/brands/e41c8d26-bdfd-4999-9086-e5939d67ae28')->json();
        var_dump($response['data']);
        return view('welcome');
    }
}
