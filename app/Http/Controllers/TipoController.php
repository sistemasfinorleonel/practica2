<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function mostrar()
    {
        return view('pages.tipos');
    }
}
