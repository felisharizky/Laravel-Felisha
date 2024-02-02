<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $getIdKelas = DB::table("Kelases")->insertGetId([
            "id_kelas" => rand(1,50),
            "nama_kelas" => str::random(10),
            "kompetensi_keahlian" => 'RPL',
        ]);

        $getIdSpp = DB::table("spps")->insertGetId([
            'id_spp' => rand(1,35),
            'tahun' => random_int(1999, 2024),
            'nominal' => rand(1,15),
        ]);

        DB ::table("siswas")->insert([
            'nisn' => rand(1,50),
            'nis' => rand(1,10),
            'nama' => 'Dedesdr',
            'id_kelas' => $getIdKelas,
            'alamat' => 'Desa Hambalang, Bogor, Indonesia.',
            'no_telp' => '089678873322',
            'id_spp' => $getIdSpp,
        ]);
    }
}