<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $roles = [
            ['name'=>'Super Admin','permissions'=>['View users','Add users','Edit users','Remove users','View roles','Add roles','Edit roles','Remove roles']],
            ['name'=>'Admin','permissions'=>['View users','View roles']],
            ['name'=>'Client','permissions'=>[]]
        ];

        foreach($roles as $role) Role::create($role);
    }

}
