<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'username' => 'Admin',
                'role' => 'Admin',
            ],
            [
                'id' => 2,
                'name' => 'Administrator',
                'email' => 'admin2@admin.com',
                'username' => 'Admin2',
                'role' => 'Admin',
            ],
            [
                'id' => 3,
                'name' => 'Cashier',
                'email' => 'cashier@cashier.com',
                'username' => 'Cashier',
                'role' => 'Cashier',
            ],
            [
                'id' => 4,
                'name' => 'Cashier',
                'email' => 'cashier2@cashier.com',
                'username' => 'Cashier2',
                'role' => 'Cashier',
            ],
        ];

        foreach ($users as &$user) {
            $user['email_verified_at'] = now();
            $user['password'] = bcrypt('password123');
            $user['created_by'] = 'System';
            $user['updated_by'] = 'System';
            $user['created_at'] = now();
            $user['updated_at'] = now();
        }

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['id' => $user['id']], 
                $user
            );
        }
    }
};