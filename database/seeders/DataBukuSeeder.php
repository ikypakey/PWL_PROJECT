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
                'judul_buku'=>'Naruto',
                'kategoris_id'=>'',
                'book_image'=>'',
                'nama_pengarang'=>'',
                'penerbit'=>'',
                'tahun_terbit'=>'',
                'jumlah_halaman'=>'',
                'user_id'=>'',
                

            ],
           [
                'judul_buku'=>'',
                'kategoris_id'=>'',
                'book_image'=>'',
                'nama_pengarang'=>'',
                'penerbit'=>'',
                'tahun_terbit'=>'',
                'jumlah_halaman'=>'',
                'user_id'=>'',
                

            ],
            [
                'judul_buku'=>'',
                'kategoris_id'=>'',
                'book_image'=>'',
                'nama_pengarang'=>'',
                'penerbit'=>'',
                'tahun_terbit'=>'',
                'jumlah_halaman'=>'',
                'user_id'=>'',
                

            ],
            ]);
    }
}
