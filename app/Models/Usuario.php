<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    use HasFactory;
    
    protected $table = 'Usuarios';

    /**
     * Validar las credenciales del usuario.
     *
     * @param string $usuario
     * @param string $contrasena
     * @return bool
     */
    public static function validarCredenciales($usuario, $contrasena)
    {
        // Buscar usuario por nombre de usuario
        $usuario = self::where('usuario', $usuario)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($usuario && Hash::check($contrasena, $usuario->clave)) {
            return true; // Credenciales correctas
        }

        return false; // Credenciales incorrectas
    }
}
