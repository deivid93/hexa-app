<?php

declare(strict_types=1);

namespace Src\Usuarios\Infrastructura;

use Src\Usuarios\Dominio\Contratos\UserContract;
use Src\Usuarios\Dominio\Modelos\UserEntity;

final class UserRepository implements UserContract
{
    private UserEntity $model;

    public function __construct()
    {
        $this->model = new UserEntity();
    }

    public function search(): array
    {
        // TODO: Implement search() method.
    }

    public function save(UserEntity $user): void
    {
        $this->model->save($user);
    }
}
