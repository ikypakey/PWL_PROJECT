<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBuku extends Model
{
    use HasFactory;
    public function data_kategori(){
        return $this ->belongsTo(DataKategori::class);
    }
    public function user(){
        return $this ->belongsTo(User::class);
    }
}
