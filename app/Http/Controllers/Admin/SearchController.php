<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class SearchController extends Controller
{
    public function search(Request $request){
        $term = $request->get('term');

        $querys = Cliente::where('cnombre', 'LIKE', '%'.$term.'%')->get();

        $data = [];

        foreach($querys as $query){
            $data[] = [
                'label' => $query->cnombre
            ];
        }

        return $data;
    }
}
