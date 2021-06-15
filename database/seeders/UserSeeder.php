<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() < 1) {
            $user = User::create([
                "name" => "Test",
                "username" => "test",
                "email" => "test@test.com",
                "password" => Hash::make("12345678"),
            ]);

        }
    }
}
