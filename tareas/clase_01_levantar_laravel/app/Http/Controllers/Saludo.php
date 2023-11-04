<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saludo extends Controller
{
    public function saludo($name, $lastN)
    {
        if (!is_numeric($name) && !is_numeric($lastN)) {
            return view('controllerGreet', ['name' => $name, 'lastN' => $lastN]);
        } else {
            return view('error');
        }
    }
}
