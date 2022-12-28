<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        $matkul = [
            "Blockchain", "Data Mining", "Cloud Computing",
            "Pemrograman Berbasis Mobile", "Techopreneur", "Framework Pemrograman Web",
            "Algoritma dan Pemrograman", "Struktur Data", "Basis Data",
            "Pemrograman Berorientasi Web", "Jaringan Komputer", "Sistem Operasi",
            "Algoritma dan Struktur Data", "Statistika dan Probabilitas", "Pemrograman Berbasis Object"
        ];
        return [
            'kode_mk' => $faker->unique()->numerify('IF###'),
            'nama_mk' => $faker->randomElement($matkul),
            'sks' => $faker->numberBetween(1, 4),
            'nama_dosen' => $faker->firstName . " " . $faker->lastName
        ];
    }
}
