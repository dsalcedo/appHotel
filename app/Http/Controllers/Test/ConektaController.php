<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Conekta;
use Conekta_Charge;
use Conekta_Error;

class ConektaController extends Controller
{
    public function cargo()
    {
        $apiEnvKey = env('CONEKTA_API');

        if(is_null($apiEnvKey)){
            dd('Registra una llave sandbox en conekta.io');
        }

        Conekta::setApiKey($apiEnvKey);
        Conekta::setLocale('es');

        try {
            $charge = Conekta_Charge::create([
                "amount"=> 51000,
                "currency"=> "MXN",
                "description"=> "Pizza Delivery",
                "reference_id"=> "orden_de_id_interno",
                "card"=> 'tok_test_visa_4242',
                'details'=> [
                    'name'=> 'Arnulfo Quimare',
                    'phone'=> '403-342-0642',
                    'email'=> 'logan@x-men.org',
                    'line_items'=> [
                        [
                            'name'=> 'Box of Cohiba S1s',
                            'description'=> 'Imported From Mex.',
                            'unit_price'=> 20000,
                            'quantity'=> 1,
                            'sku'=> 'cohb_s1',
                            'category'=> 'food'
                        ]
                    ]
                ]
            ]);
        } catch (Conekta_Error $e) {

            $data = [
                'message' => $e->getMessage(),
                'message_purchaser' => $e->message_to_purchaser
            ];

            return response()->json($data);
        }

        $data = [
            'message' => 'success',
            'message_purchaser' => 'Pago efectuado'
        ];
        return response()->json($data);

    }
}
