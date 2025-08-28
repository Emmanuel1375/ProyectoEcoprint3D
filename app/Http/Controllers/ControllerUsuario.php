<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerUsuario extends Controller
{
    public function index()
    {
        $usuarios = DB::table('vwusuarios')->get();
        $pageTitle = 'Usuarios';
        return view('admin.Usuarios.usuarios', compact('usuarios', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ci' => 'required|unique:users',
            'nombres' => 'required',
            'primerApellido' => 'required',
            'nombreUsuario' => 'required|unique:users',
            'password' => 'required|confirmed',
            'rol' => 'required',
        ]);

        User::create([
            'ci' => $request->ci,
            'nombres' => $request->nombres,
            'primerApellido' => $request->primerApellido,
            'segundoApellido' => $request->segundoApellido,
            'nombreUsuario' => $request->nombreUsuario,
            'password' => bcrypt($request->password),
            'direccion' => $request->direccion,
            'rol' => $request->rol,
        ]);

        return redirect()->route('usuarios')->with('success', 'Usuario creado correctamente.');
    }

    public function edit(User $usuario)
    {
        $pageTitle = 'Editar Usuario';
        return view('admin.Usuarios.editarUsuario', compact('usuario', 'pageTitle'));
    }

    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'ci' => 'required|unique:users,ci,' . $usuario->id,
            'nombres' => 'required',
            'primerApellido' => 'required',
            'nombreUsuario' => 'required|unique:users,nombreUsuario,' . $usuario->id,
            'password' => 'nullable|confirmed',
            'rol' => 'required',
        ]);

        $data = $request->except('password');
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $usuario->update($data);

        return redirect()->route('usuarios')->with('success', 'Usuario actualizado correctamente.');
    }
}
