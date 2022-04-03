<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Hoffenheim Technologies',
            'email' => 'admin@mail.com',
            'password' =>bcrypt('Hofftech2020'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'test@mail.com',
            'password' =>bcrypt('Hofftech2020'),
        ]);
    }
}
