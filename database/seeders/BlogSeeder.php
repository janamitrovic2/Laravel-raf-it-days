<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([

            'title' => "Počeo RAF IT Days",

            'short_description' => "I ove godine, 14i put održava se…",

            'content' => "<p>Ovde ide opširniji sadržaj. Možete da kopirate tekst sa sajta RAF-a, ili da ostavite ovako...</p>",

            'picture' => "https://raf.edu.rs/wp-content/uploads/2022/01/RAFitdays2017.jpg",
            
            'published' =>'2024-03-31'

        ]);
        DB::table('blogs')->insert([

            'title' => "Druga vest",

            'short_description' => "Kratak intro",

            'content' => "<p>Ovde ide opširniji sadržaj. Možete da kopirate tekst sa sajta RAF-a, ili da ostavite ovako...</p>",

            'picture' => "https://raf.edu.rs/wp-content/uploads/2022/01/RAFitdays2017.jpg",

            'published' =>'2024-03-31'

        ]);
    }
}
