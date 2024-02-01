<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB ::table("siswas")->insert([
            'nisn' => 1001,
            'nis' => rand(1,10),
            'nama' => 'Dede',
            'id_kelas' => 12,
            'alamat' => 'Bogor',
            'no_telp' => '089698653522',
            'id_spp' => 1529,
        ]);
    }
}