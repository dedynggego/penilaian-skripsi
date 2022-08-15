<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'level' => 1,
            'email' => 'admin@ti_unmus.ac.id',
        ],
        [
            'name' => 'Dedy Abdianto Nggego',
            'nidn' => '0911099203',
            'username' => 'dedy',
            'password' => bcrypt('dedy'),
            'level' => 2,
            'email' => 'dedyabdianto@unmus.ac.id',
        ],  
        [
            'name' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'password' => bcrypt('mahasiswa'),
            'level' => 3,
            'email' => 'mahasiswa@ti_unmus.ac.id',
        ]];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
