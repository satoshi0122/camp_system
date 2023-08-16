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
            'last_name'=>'後藤',
            'first_name'=>'哲志',
            'last_name_kana'=>'ゴトウ',
            'first_name_kana'=>'サトシ',
            'email'=>'rego.satosi@gmail.com',
            // 'email_verified_at'=>'0',
            'phone'=>'09001224711',
            'password'=>bcrypt('01220122')
        ]);
    }
}
