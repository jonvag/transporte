<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Day;
class InicioController extends Controller
{
    public function index(){
        
        
        return view('inicio.index'); 
    }

    public function index2(){
        
        return redirect()->route('inicio.index'); 
    }
}
