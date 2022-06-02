<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Src\Usuarios\Dominio\Modelos\User;
use Src\Usuarios\Infrastructura\UserRepository;

final class UserController {
    public function create(){
        $useCase = new createUserCase(new UserRepository());
        return view('user.success')->with('success', 'Usuario creado Correctamente.');
    }
}
