<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            'id' => 1,
            'ket' => 'Bisnis kontruksi dan Properti',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 2,
            'ket' => 'Desain Permodelan dan Informasi Bangunan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 3,
            'ket' => 'Elektronika Industri',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 4,
            'ket' => 'Otomasi Industri',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 5,
            'ket' => "Teknik Pemesinan",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 6,
            'ket' => 'Teknik dan Bisnis Sepeda Motor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 7,
            'ket' => 'Rekayasa Perangkat Lunak',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 8,
            'ket' => "Teknik Pengelasan",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);


        DB::table('mapel')->insert([
            'id' => 1,
            'nama_mapel' => 'Bahasa Indonesia',
            'paket_id' => '9',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 2,
            'nama_mapel' => 'Bahasa Inggris',
            'paket_id' => '9',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 3,
            'nama_mapel' => 'Matematika',
            'paket_id' => '9',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 4,
            'nama_mapel' => 'Pendidikan Agama dan Budi Pekerti',
            'paket_id' => '9',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 5,
            'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'paket_id' => '9',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
