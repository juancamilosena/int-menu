<?php

namespace App\Http\Controllers;

use App\Models\carta;
use App\Models\Producto;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    //
    public function carta(){
        $productos = Producto::all();
        // dd($productos);
        return view('carta', compact('productos'));
    }
}
