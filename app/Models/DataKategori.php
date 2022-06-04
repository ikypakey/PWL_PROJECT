<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKategori extends Model
{
    use HasFactory;
    public function data_bukus(){
        return $this ->hasMany(DataBuku::class);
    }


}
