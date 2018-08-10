<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumController extends Controller
{
    public function store(Request $request)
    {
        $alumno=new Alumno;
        $alumno->nombre=$request->nombre;
        $alumno->nota=$request->nota;
        $alumno->save();
    }

}
