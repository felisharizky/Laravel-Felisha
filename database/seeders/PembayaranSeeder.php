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
        $siswa = DB::table("siswas")->first();
        $petugas = DB::table("petugases")->first();
        $spp = DB::table("spps")-> where('id_spp', $siswa->id_spp)->first();
        //
        DB::table("pembayarans")->insert([
            'id_pembayaran' => rand(1,95),
            'id_petugas' => $petugas->id_petugas,
            'nisn' =>  $siswa->nisn,
            'tgl_bayar' => now(),
            'bulan_dibayar' => str::random(8),
            'tahun_dibayar' => str::random(4),
            'id_spp' =>  $spp->id_spp,
            'jumlah_bayar' => rand(20, 105),
      ]);

    }
}