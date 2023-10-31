<?php

namespace Database\Seeders;

Use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::truncate();
        user::create([
            'name' => 'Admin Ahu',
            'level' => 'admin',
            'email' => 'adminahu@gmail.com',
            'password' => bcrypt('ahu321'),
        ]);
    }
}
