<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Usuario::all();
        return view('usuarios/inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios/agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->usuario = $request->usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->telefono = $request->telefono;
        $usuario->fecha_nac = $request->fecha_nac;
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('uploads', 'public');
            $usuario->imagen = $imagePath;
        }
        $usuario->clave = bcrypt($request->clave);
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios/actualizar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->usuario = $request->usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->telefono = $request->telefono;
        $usuario->fecha_nac = $request->fecha_nac;
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('uploads', 'public');
            $usuario->imagen = $imagePath;
        }
        $usuario->clave = bcrypt($request->clave);
        
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuario.index');
    }

    public function login(Request $request)
    {
        $usuario = $request->input('usuario');
        $contrasena = $request->input('clave');

        if (Usuario::validarCredenciales($usuario, $contrasena)) {
            // Autenticación exitosa
            $request->session()->put('usuario', $usuario);
            // $request->session()->put('nombre', Usuario::where('usuario', $usuario)->value('nombre'));

            return redirect('matricula');
        }

        // Autenticación fallida
        return back()->withErrors(['usuario' => 'Credenciales incorrectas']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('usuario');
        return view('welcome');
    }

}
