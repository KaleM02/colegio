<?php

namespace App\Http\Controllers;

use App\Models\Retrasada;
use App\Models\Alumno;
use Illuminate\Http\Request;

class RetrasadaController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('tesoreria.retrasada', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $alumno = Alumno::findOrFail($id);
        $retrasadas = Retrasada::whereIn('id_alumno', $alumno->pluck('id'))->get()->keyBy('id_alumno');
        return view('tesoreria.form_retrasadas', compact('alumno', 'retrasadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Recupera los valores de los checkboxes del formulario
        $alumno = $request->input('id_alumno');
        $grad = $request->input('grado');
        $anio = $request->input('anio');
        $materiar = $request->input('materiaretrasada');
        $total = $request->input('total');


        $registro_existente = Retrasada::where('id_alumno', $alumno)->count();
        if ($registro_existente > 0) {
            //Actualizar registro Consejeria del alumno
            $retrasadas = Retrasada::where('id_alumno', $alumno)->first();

            // Asigna los valores de los checkboxes al modelo
            $retrasadas->grado = $grad;
            $retrasadas->anio = $anio;
            $retrasadas->materiaretrasada = $materiar;
            $retrasadas->total = $total;

            // Guarda el modelo en la base de datos
            $retrasadas->save();
        } else {
            //Crear registro nuevo en Consejeria del alumno

            // Crea una nueva instancia del modelo Consejeria
            $retrasadas = new Retrasada();

            // Asigna los valores de los checkboxes al modelo
            $retrasadas->grado = $grad;
            $retrasadas->anio = $anio;
            $retrasadas->materiaretrasada = $materiar;
            $retrasadas->total = $total;

            // Guarda el modelo en la base de datos
            $retrasadas->id_alumno = $alumno;
            $retrasadas->save();
        }


        // Redirige a la página o realiza alguna acción adicional
        return redirect('retrasadas');
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
    public function edit(Retrasada $retrasadas)
    {
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
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retrasada $retrasadas)
    {
        $retrasadas->delete();
        $deletename = $retrasadas->nombre;
        $notification = 'El alumno ' . $deletename . ' ha eliminado correctamente';
        return redirect('/retrasadas')->with(compact('notification'));
    }
}
