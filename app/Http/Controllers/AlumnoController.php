<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno=new Alumno;
        $alumno->nombre=$request->nombre;
        $alumno->nota=$request->nota;
        $alumno->save();
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function DevolvertodosJson(){
        $alumno=new Alumno;
        $alumno=Alumno::all();
        return response()->json($alumno);
    }
    public function agregarAlumno(Request $request){
        $alumno=new Alumno;
        $alumno->nombre=$request->nombre;
        $alumno->promedio=$request->promedio;
        $alumno->save();

       
        echo "guarde";
    }

    public function EliminarAlumno($id)
    {
        $alumno=Alumno::find($id);
        if($alumno){
             $alumno->delete();
            return response()->json(['msg' => 'Se elimino correctamente']);    
        }          
         else    
            return response()->json(['msg' => 'No existe alumno']);   
    }
}
