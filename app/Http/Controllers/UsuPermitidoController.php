<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuPermitidoController extends Controller
{

    public function __construct()
    {
        $this->middleware('permiso');
    }

    public function acceso()
    {

        return view('permiso');
    }

}
