<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function Mostrarlogin()
    {
        return view('login.login');
    }
    public function login(Request $request)
   
    {
        $credentials = $this->validate(request(), [
            'usuario' => 'required|string',
            'clave' => 'required|string'
        ]);
         $user = Login::where('usuario', $credentials['usuario'])->first();
            if($user){
                if($user->clave == $credentials['clave']){
                    return redirect()->route('materia.index');
                }
                else{
                    return back()->withErrors(['clave' => 'Contraseña incorrecta'])->withInput(request(['usuario']));
                }
            }
            else{
                return back()->withErrors(['usuario' => 'Usuario no encontrado'])->withInput(request(['usuario']));
            }
             
      }

      public function Mostrarregister()
      {
          return view('login.register');
      }

      public function register(Request $request)
{
    $validatedData = $request->validate([
        'usuario' => 'required|unique:usuarios|max:255',
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'fecha_nac' => 'required',
         'clave' => 'required',
    ]);

    $login = new Login();
    $login->usuario = $request->usuario;
    $login->nombre = $request->nombre;
    $login->apellido = $request->apellido;
    $login->telefono = $request->telefono;
    $login->fecha_nac = $request->fecha_nac;
    $login->imagen = $request->imagen;
    $login->clave = $request->clave;

    $login->save();

    return redirect()->route('login.login')->with('success', 'Usuario registrado correctamente');
}




}
