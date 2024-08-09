<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use function Spatie\LaravelPdf\Support\pdf;

class BaseController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => false ]);
        $response = Http::withBasicAuth('frits@test.qlsnet.nl', '4QJW9yh94PbTcpJGdKz6egwH')
        ->get('https://api.pakketdienstqls.nl/companies/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/brands/e41c8d26-bdfd-4999-9086-e5939d67ae28');
        var_dump($response['data']);
        return view('welcome', ['reponse' => $response]);
    }

    public function pdf()
    {
        $response = Http::withBasicAuth('frits@test.qlsnet.nl', '4QJW9yh94PbTcpJGdKz6egwH')
        ->get('https://api.pakketdienstqls.nl/companies/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/brands/e41c8d26-bdfd-4999-9086-e5939d67ae28');
        return pdf()
            ->view('pdf', compact($response['data']))
            ->name('invoice-2023-04-10.pdf');
    // return Pdf::view('pdf', ['reponse' => $response['data']])
    // ->save('test.pdf');
    // return view('pdf', ['reponse' => $response]);
    }
}
