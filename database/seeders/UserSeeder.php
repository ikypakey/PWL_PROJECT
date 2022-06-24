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
                'foto' => '/image/admin-male.png',
                'nama' => 'Ahmad Dani Maulana',
                'email' => 'ahmaddanimaulana@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'Admin',
                'tanggal_join' => '2022-06-04',
            ],
            [
                'foto' => '/image/admin-male.png',
                'nama' => 'Muhammad Rizki Mubarok',
                'email' => 'muhammadrizkimubarok@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'Admin',
                'tanggal_join' => '2022-06-04',
            ],
            [
                'foto' => '/image/admin-male.png',
                'nama' => 'Alaika Rohman',
                'email' => 'alaikarohman@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'Petugas',
                'tanggal_join' => '2022-06-04',
            ],
            [
                'foto' => '/image/admin-male.png',
                'nama' => 'Agus Leman Gunawan',
                'email' => 'agus@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'Petugas',
                'tanggal_join' => '2022-06-20',
            ],
            [
                'foto' => '/image/admin-female.png',
                'nama' => 'Cindy Tanuwidjaja',
                'email' => 'cindy@gmail.com',
                'password' => Hash::make('1234'),
                'level' => 'Petugas',
                'tanggal_join' => '2022-06-20',
            ]
            ]);
    }
}
