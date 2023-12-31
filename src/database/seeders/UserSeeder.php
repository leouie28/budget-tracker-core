<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mark Test',
            'email' => 'user@test.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Test 2',
            'email' => 'admin@test.com',
            'password' => Hash::make('123'),
            'role_id' => 1
        ]);
    }
}
