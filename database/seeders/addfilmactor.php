<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class addfilmactor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            for ($j=1; $j <= 5; $j++) { 
                DB::table('film_actor')->insert([
                    ['film_id' => $i, 'actor_id' => rand(1,10)],
                ]);
            }
        }
    }
}
