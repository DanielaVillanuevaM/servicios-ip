<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ControllerUser extends Controller
{
    //
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'correoElectronico' => 'required | unique:Usuarios',
            'contraseña' => 'required | confirmed',
        ]);

        // $validate['contraseña'] = Hash::make($validate['contraseña']);
        $validate['rol'] = 'admin';

        Usuario::create($validate);
        return redirect()->back()->with('Success', 'Usuario creado exitosamente.');
    }

    public function set()
    {
        $users = Usuario::all();

        return view('gestorlista', compact('users'));
    }
}
