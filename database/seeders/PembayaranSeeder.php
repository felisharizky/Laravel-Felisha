<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("pembayarans")->insert([
            'id_pembayaran' => rand(1,100),
            'id_petugas' => 1234,
            'nisn' =>  1001,
            'tgl_bayar' => now(),
            'bulan_dibayar' => str::random(8),
            'tahun_dibayar' => str::random(4),
            'id_spp' =>  1529,
            'jumlah_bayar' => rand(20, 105),
      ]);

    }
}