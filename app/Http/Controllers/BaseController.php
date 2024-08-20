<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use function Spatie\LaravelPdf\Support\pdf;
use Spatie\LaravelPdf\Facades\Pdf;
use File;

class BaseController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => false ]);
        $response = Http::withBasicAuth('frits@test.qlsnet.nl', '4QJW9yh94PbTcpJGdKz6egwH')
        ->get('https://api.pakketdienstqls.nl/companies/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/brands/e41c8d26-bdfd-4999-9086-e5939d67ae28');
        var_dump($response['data']);
        return view('welcome', ['response' => $response['data']]);
    }

    public function pdf()
    {
        $response = Http::withBasicAuth('frits@test.qlsnet.nl', '4QJW9yh94PbTcpJGdKz6egwH')
        ->get('https://api.pakketdienstqls.nl/companies/9e606e6b-44a4-4a4e-a309-cc70ddd3a103/brands/e41c8d26-bdfd-4999-9086-e5939d67ae28');
     Pdf::view('pdf', ['response' => $response['data']])
    ->format('a4')
    ->save('test.pdf');
    $file = public_path(). "/test.pdf";
     $headers = [
        'Content-Type' => 'application/pdf',
     ];
    return response()->download($file, 'test.pdf', $headers);
    }
}
