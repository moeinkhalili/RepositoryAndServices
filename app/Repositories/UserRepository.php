<?php

namespace App\Repositories;

use App\Interfaces\Repository\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function getAll()
    {
        return User::all()();
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function create(array $userData)
    {
        // TODO: Implement create() method.
    }

    public function update($id, array $userData)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
