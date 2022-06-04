<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataAnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_anggotas')->insert([
            [
                'id' => '101',
                'image' => '',
                'nama' => 'Najwa syarifah',
                'jeniskelamin' => 'Perempuan',
                'alamat' => 'jl. kejayan no 2 kabupaten Pasuruan',
                'notelp' => '08510178448',
                'tanggallahir' => '2002-12-08',
            ],
            [
                'id' => '102',
                'image' => '',
                'nama' => 'Renata Putri',
                'alamat' => 'jl. warungdowo kabupaten Pasuruan',
                'jeniskelamin' => 'Perempuan',
                'notelp' => '08110177748',
                'tanggallahir' => '2002-09-05',
            ],
            [
                'id' => '103',
                'image' => '',
                'nama' => 'Prayogo makarya',
                'alamat' => 'jl. purwosari kabupaten Pasuruan',
                'jeniskelamin' => 'Laki-Laki',
                'notelp' => '081515334678',
                'tanggallahir' => '2002-02-02',
            ]
            ]);
    }
}
