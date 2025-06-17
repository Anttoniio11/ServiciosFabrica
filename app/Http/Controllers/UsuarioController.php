<?php

namespace App\Http\Controllers;

use App\Services\UsuariosService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    protected $usuariosService;

    public function __construct(UsuariosService $usuariosService)
    {
        $this->usuariosService = $usuariosService;
    }

     public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
        ]);

        $usuario = $this->usuariosService->create($request->all());

        return response()->json([
            'message' => 'Usuario creado correctamente',
            'data' => $usuario,
        ], 201);
    }
}
