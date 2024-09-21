<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu =User::create([
            'name' => '松下',
            'email' => 'matti15291225@gmail.com',
            'password' => Hash::make('matti1225'),
        ]);
    }
}
