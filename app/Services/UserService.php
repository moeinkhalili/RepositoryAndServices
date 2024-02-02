<?php

namespace App\Services;

use App\Interfaces\Service\UserServiceInterface;
use App\Repositories\UserRepository;

class UserService implements UserServiceInterface
{
    public UserRepository $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAll();
    }
}
