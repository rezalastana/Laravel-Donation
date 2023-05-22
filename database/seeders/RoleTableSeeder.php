<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //buat role nya
        $roles = [
            'admin',
            'donatur'
        ];

        collect($roles)->map(function($name){
            Role::query()
                ->updateOrCreate(compact('name'), compact('name'));
        });

    }
}
