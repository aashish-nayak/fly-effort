<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashfreeController extends Controller
{
    public function order()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://sandbox.cashfree.com/pg/orders', [
            'headers' => [
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);

        $body = $response->getBody();
        dd($body);
    }
}
