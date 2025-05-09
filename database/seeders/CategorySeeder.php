<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            'Pemrograman',
            'Desain Grafis',
            'Jaringan Komputer',
            'Database',
            'Keamanan Jaringan',
            'Pengembangan Web',
            'Analisis Data'
        ];
        foreach($categories as $category){
            \DB::table('categories')->insert([
                'name' => $category,
                'slug'=>,re
                'created_at' => now(),
                'updated_at' => now()
            ]);

        }
    }
}
