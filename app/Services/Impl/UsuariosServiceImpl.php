<?php

namespace App\Services\Impl;

use App\Models\Usuario;
use App\Services\UsuariosService;

class UsuariosServiceImpl implements UsuariosService
{
    public function create(array $data){
        return Usuario::create($data);
    }
 }
