<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProgineMoneta;

class CoinProginesMonetasController extends Controller
{
    public function update(ProgineMoneta $progineMoneta){
        
        $progineMoneta->update([
            'colected' => request()->has('colected')
        ]);

            return back();

    }
}
