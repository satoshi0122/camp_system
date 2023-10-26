<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name'=>'後藤哲志', 
            'email'=>'@gmail.com',
            // 'email_verified_at'=>'0',
            'phone'=>'09011110122',
            'password'=>bcrypt('01220122')
        ]);
    }
}
