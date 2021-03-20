<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SandBox extends Controller
{
    public function boolRandom()
    {
        return rand(0,1);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first = $this->boolRandom();
        $second = $this->boolRandom();
        $binStr = "{$first}{$second}";
        $res = bindec($binStr);
        if($res < 1){
            $this->index();
        }
        dd($res);
    }


}
