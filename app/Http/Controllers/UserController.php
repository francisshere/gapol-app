<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    // Exercise 1
    public function show(){
        $users = [
            ['name' => 'John Doe', 'gender' => 'Male'],
            ['name' => 'Jane Smith', 'gender' => 'Female'],
        ];
        return response()->json($users);
    }

    public function index(UserService $userService) {
        return response()->json($userService->listUsers());
    }

    //  Exercise 2
    public function first(UserService $userService){
        return collect($userService->listUsers())->first();
    }

    public function get(UserService $userService, $id){
        $user = collect($userService->listUsers())->filter(function($item) use ($id) {
            return $item['id'] == $id;
        })->first();

        return $user;
    }
}

