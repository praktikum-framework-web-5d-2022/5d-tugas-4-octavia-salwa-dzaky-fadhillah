<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


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
        // $this->call(MahasiswaSeeder::class);
        // $this->call(UserSeeder::class);
        \App\Models\MataKuliah::factory()->count(15)->create();
    }
}
