<?php

namespace Src\Usuarios\Aplicacion;

use Src\Usuarios\Dominio\Contratos\UserContract;
use Src\Usuarios\Dominio\Modelos\User;
use Src\Usuarios\Dominio\Modelos\UserEntity;

class createUserCase{
    private UserContract $userContract;

    public function __construct(UserContract $contract = null) {
        $this->userContract = $contract;
    }

    public function execute(User $user){
        $response = $this->userContract->create($user);
        return UserEntity::fromArray($response); 
    }
}