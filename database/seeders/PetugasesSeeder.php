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
            "id_petugas" => 1234,
            "username" => str::random(25),
            "password" => str::random(32),
            "nama_petugas" => "Jojo",
            "level" => $levels[array_rand($levels)],
        ]);
     }
}