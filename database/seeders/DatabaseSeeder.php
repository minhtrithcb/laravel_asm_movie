<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([adddirector::class]);
        $this->call([addgenres::class]);
        $this->call([addfilm::class]);
        $this->call([addactor::class]);
        $this->call([addfilmgenres::class]);
        $this->call([addfilmactor::class]);
    }
}
