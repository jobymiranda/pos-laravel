<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09181234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '09191234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Ana Garcia', 'email' => 'ana@example.com', 'phone' => '09201234567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Luis Mendoza', 'email' => 'luis@example.com', 'phone' => '09211234567', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['username' => 'admin01', 'full_name' => 'Admin User', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier01', 'full_name' => 'Cashier One', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier02', 'full_name' => 'Cashier Two', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'manager01', 'full_name' => 'Manager User', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'staff01', 'full_name' => 'Staff User', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
