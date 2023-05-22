<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory(5)->create(); //akan membuat 5 user
        //setelah di generate panggil semua user yang telah dibuat
        // $user = User::all(); atau bisa langsung kebawah

        //panggil data pertama
        $user = User::first();
        //ubah nama data pertana
        $user->name='Administrator';
        //ubah email data pertama
        $user->email='admin@admin.com';
        //ubah data pertama role_id = 1, karena default pada userFactory adalah 2, dibuat 5 maka 1 role_id=1, 4 role_id=2
        $user->role_id = 1;

        //terakhir kita save perubahan diatas bisa save atau update
        $user->save();
    }
}
