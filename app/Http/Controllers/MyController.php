<?php


namespace App\Http\Controllers;

use illuminate\Http\Request;

class MyController extends Controller
{
    public function exampleMethod($data1, $data2){

        $hasil = $data1 + $data2;

        return $hasil;

    }
}
