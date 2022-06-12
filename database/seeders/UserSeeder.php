<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'foto' => '',
                'nama' => 'Ahmad Dani Maulana',
                'email' => 'ahmaddanimaulana@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'admin',
                'tanggal_join' => '2022-06-04',
            ],
            [
                'foto' => '',
                'nama' => 'Muhammad Rizki Mubarok',
                'email' => 'muhammadrizkimubarok@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'admin',
                'tanggal_join' => '2022-06-04',
            ],
            [
                'foto' => '',
                'nama' => 'Alaika Rohman',
                'email' => 'alaikarohman@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'petugas',
                'tanggal_join' => '2022-06-04',
            ]
            ]);
    }
}
