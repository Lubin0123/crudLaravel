<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use App\Models\producto;

class crudLaravelController extends Controller
{
//creo un metodo index para recibir el direccionamiento de la ruta web.php
    public function index(){
        //por medio de la variable $datos hago una consulta sql para listar el contenido de mi tabla
         $datos=DB::select("select * from productos");
        $datos=producto::get();
        //retorno a la avista que quiero ir con la variable $datos
        return view("welcome")->with("datos", $datos);
    }

    public function index1(){
        Return "Entra al index";
    }
}

