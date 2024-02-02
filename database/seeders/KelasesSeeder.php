<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
class KelasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelases')->insert([
            "id_kelas" => rand(1,50),
            "nama_kelas" => str::random(10),
            "kompetensi_keahlian" => 'RPL',
        ]);
    
    }
}