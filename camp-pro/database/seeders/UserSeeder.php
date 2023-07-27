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
            'sei'=>'後藤',
            'mei'=>'哲志',
            'sei_kana'=>'ゴトウ',
            'mei_kana'=>'サトシ',
            'email'=>'aaa.gmail.com',
            // 'email_verified_at'=>'0',
            'phone'=>'09001224711',
            'password'=>bcrypt('01220122')
        ]);
    }
}
