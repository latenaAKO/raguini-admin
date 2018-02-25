<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::truncate();
        User::create([
            'name' => 'root',
            'email' => 'leo@leo.com',
            'password' => Hash::make('123456')
        ]);
    }
}
