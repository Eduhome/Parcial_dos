<?php

namespace App\Http\Controllers;
use App\Models\Materias;

use Illuminate\Http\Request;

class mostrarlistas extends Controller
{
    //
    public function index(){

        $materia = Materias::all();
        //dd($materia);
        return view('listamaterias')->with('materia', $materia);
    }

}
