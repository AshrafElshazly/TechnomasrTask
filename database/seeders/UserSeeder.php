<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'User1','phone'=>'01011111111','email'=>'user1@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face1.jpg','role_id'=>1],
            ['name' => 'User2','phone'=>'01022222222','email'=>'user2@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face2.jpg','role_id'=>2],
            ['name' => 'User3','phone'=>'01033333333','email'=>'user3@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face3.jpg','role_id'=>2],
            ['name' => 'User4','phone'=>'01044444444','email'=>'user4@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face4.jpg','role_id'=>3],
            ['name' => 'User5','phone'=>'01055555555','email'=>'user5@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face5.jpg','role_id'=>3],
            ['name' => 'User6','phone'=>'01066666666','email'=>'user6@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face6.jpg','role_id'=>3],
            ['name' => 'User7','phone'=>'01077777777','email'=>'user7@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face7.jpg','role_id'=>3],
            ['name' => 'User8','phone'=>'01088888888','email'=>'user8@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face8.jpg','role_id'=>3],
            ['name' => 'User9','phone'=>'01099999999','email'=>'user9@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face9.jpg','role_id'=>3],
            ['name' => 'User10','phone'=>'01010101010','email'=>'user10@gmail.com','password'=>Hash::make('23225897'),'photo'=>'face10.jpg','role_id'=>3]
        ];

        foreach($users as $user) User::create($user);
    }
}
