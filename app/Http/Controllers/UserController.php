<?php

namespace App\Http\Controllers;

use App\Services\UserService;
class UserController extends Controller
{
    public UserService $userService;
    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }
    public function index()
    {
        return $this->userService->getAllUsers();
    }
}
