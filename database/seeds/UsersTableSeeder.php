<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        User::create([
            'name'     => 'admin',
            'email'    => 'admin@email.com',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name'     => 'Hicham',
            'email'    => 'hessaydi@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name'     => 'demo',
            'email'    => 'demo@demo.com',
            'password' => Hash::make('223112'),
        ]);

    }
}
