<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("spps")->insert([
            'id_spp' => '1529',
            'tahun' => random_int(2000, 2024),
            'nominal' => '200000',
        ]);

    }
}