<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class CustommerController extends Controller
{
    public function list()
    {
        $customers = [
            'adc',
            'efv',
            'bla',
            'vusaka',

        ];

        return view( 'internal.custommer',[
            'name' => $customers,
        ]);
    }
}