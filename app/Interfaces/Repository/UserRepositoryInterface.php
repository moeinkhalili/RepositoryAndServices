<?php

namespace App\Interfaces\Repository;

interface UserRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $userData);
    public function update($id, array $userData);
    public function delete($id);}
