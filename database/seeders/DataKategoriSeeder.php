<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DataKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            [
                'nama_kategori'=>'Komik',
                'image'=>'',
                'deskripsi'=>'Komik merupakan cerita yang menonjolkan pada gambar statis yang ditampilkan sesuai urutan peristiwa.',
            ],
            [
                'nama_kategori'=>'Novel',
                'image'=>'',
                'deskripsi'=>'Suatu buku yang menceritakan tentang rangkaian kehidupan seorang tokoh dan orang-orang 
                             disekitarnya dengan berbagai macam watak yang ditonjolkan',
            ],
            [
                'nama_kategori'=>'Cergam',
                'image'=>'',
                'deskripsi'=>'Jenis buku yang menggunakan gambar-gambar tidak bergerak yang disusun sedemikian rupa sehingga membentuk jalinan cerita',
            ]
            ]);
    }
}
