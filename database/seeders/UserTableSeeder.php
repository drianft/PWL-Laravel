<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('users')->insert([
            'name' => 'Budi',
            'email'=>'Budi_gunawan@gmail.com',
            'password' => bcrypt('rahasia')
        ]);
    }
}
