<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PetugasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $levels = ["admin", "petugas"];
    
        DB::table("petugases")->insert([
            "id_petugas" => rand(1,85),
            "username" => str::random(15),
            "password" => str::random(20),
            "nama_petugas" => "Felisha",
            "level" => $levels[array_rand($levels)],
        ]);
     }
}