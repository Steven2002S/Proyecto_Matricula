<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Usuarios::all();
        return view('welcome', \compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Obtener los datos del formulario
        $datosUsuarios = request()->except('_token');
        //Ver si la foto existe
        if ($request->hasFile('imagen')) {

            $path = $request->file('imagen')->store('images', 'public');
            $datosUsuarios['imagen'] = $path;
        }
        //Crea el objeto de tipo Usuarios
        Usuarios::create($datosUsuarios);

        //Encriptar la contraseña
        $contraseña = Hash::make($request->input('contraseña'));
        //Guardar la contraseña en la base de datos
        $datosUsuarios['contraseña'] = $contraseña;
        //Crea el objeto de tipo Usuarios
        Usuarios::create($datosUsuarios);
       

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
