<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('@Admin123'),
            'address'=> 'admin',
            'phone'=> '081987654321',
            'company_name'=> 'admin',
     ]);
    }
}
