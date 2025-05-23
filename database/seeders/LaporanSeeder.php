<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Menggunakan DB facade untuk menambah data langsung ke database
        for ($i = 0; $i < 5; $i++) {
            DB::table('laporans')->insert([
                'lokasi' => $faker->city,
                'lat'=> $faker->randomFloat(6, -90, 90),
                'lng'=> $faker->randomFloat(6, -90, 90),
                'nama_pelapor' => $faker->name,
                'no_hp_pelapor' => $faker->phoneNumber,
                'jenis_kebakaran' => $faker->randomElement(['Kebakaran','Penyelamatan','Edukasi']),
                'status' => 'menunggu',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
