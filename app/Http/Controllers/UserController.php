<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin User', 'email' => 'admin@example.com', 'role' => 'Administrator'],
            ['id' => 2, 'name' => 'Cashier One', 'email' => 'cashier1@example.com', 'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Cashier Two', 'email' => 'cashier2@example.com', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Manager User', 'email' => 'manager@example.com', 'role' => 'Manager'],
            ['id' => 5, 'name' => 'Staff User', 'email' => 'staff@example.com', 'role' => 'Staff'],
        ];

        return view('users', compact('users'));
    }
}
