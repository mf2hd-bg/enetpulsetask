<?php

namespace Database\Seeders;

use App\Models\UserLogin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserLoginsSeeder extends Seeder
{
    /**
     * Run the UserLogin seeds.
     */
    public function run(): void
    {
        UserLogin::factory()
            ->count(2000)
            ->create();
    }
}
