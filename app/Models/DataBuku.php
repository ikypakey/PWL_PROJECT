<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBuku extends Model
{
        
    use HasFactory;
    protected $table='data_bukus'; 
    protected $primaryKey = 'id'; 

    public function data_kategori(){
        return $this ->belongsTo(DataKategori::class);
    }
    public function user(){
        return $this ->belongsTo(User::class);
    }
    protected $fillable = [
       'judul_buku',
        'kategoris_id',
        'book_image',
        'nama_pengarang' ,
        'penerbit',
        'tahun_terbit',
        'jumlah_halaman',
        'user_id',
    ];

}
