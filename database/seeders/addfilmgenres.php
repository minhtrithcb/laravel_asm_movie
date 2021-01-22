<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class addfilmgenres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            for ($j=1; $j <= 3; $j++) { 
                DB::table('film_genres')->insert([
                    ['film_id' => $i, 'genres_id' => rand(1,12)],
                ]);
            }
        }
    }
}
