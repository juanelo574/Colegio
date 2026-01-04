<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Routing\Controller;
class AlumnoController extends Controller
{
    
    public function index()
    {
        $alumnos = \App\Models\Alumno::all();
        return view('Alumnos.index', compact('alumnos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
         'codigo_alumno' => 'required|unique:alumnos',
        'nombre' => 'required',
        'apellido' => 'required',
        'fecha_nacimiento' => 'required|date',
        'genero' => 'required',
        'email' => 'required|email|unique:alumnos',
        'telefono' => 'required',
        'direccion' => 'required',
        'fecha_inscripcion' => 'required|date'
        ]);

        Alumno::create([
            'codigo_alumno' => $request->codigo_alumno,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'genero' => $request->genero,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'fecha_inscripcion' => $request->fecha_inscripcion,
            'activo' => true
        ]);
        return redirect()->route('alumnos.create')
        ->with('success', 'Alumno creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
