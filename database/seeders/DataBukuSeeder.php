<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DataBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('data_bukus')->insert([
            [
                'judul_buku'=>'Naruto Shipuden Vol 30',
                'kategoris_id'=>'1',
                'book_image'=>'',
                'nama_pengarang'=>' Mashashi Kishimoto',
                'penerbit'=>'CV. Anugerah Rajarjo',
                'tahun_terbit'=>' 2016 ',
                'jumlah_halaman'=>' 200 ',
                'user_id'=>' 2 ',
                

            ],
           [
                 'judul_buku'=>'Naruto Shipuden Vol 1',
                'kategoris_id'=>1,
                'book_image'=>'',
                'nama_pengarang'=>' Mashashi Kishimoto',
                'penerbit'=>'CV. Anugerah Rajarjo',
                'tahun_terbit'=>' 2016 ',
                'jumlah_halaman'=>' 200 ',
                'user_id'=>3
                

            ],
            [
                'judul_buku'=>'Naruto Shipuden Vol 45',
                'kategoris_id'=>1,
                'book_image'=>'',
                'nama_pengarang'=>' Mashashi Kishimoto',
                'penerbit'=>'CV. Anugerah Rajarjo',
                'tahun_terbit'=>' 2016 ',
                'jumlah_halaman'=>' 200 ',
                'user_id'=>3

                

            ],
            ]);
    }
}
