<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Interface\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public UserRepository $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers(): array
    {
        return $this->userRepository->getAll();
    }
}
