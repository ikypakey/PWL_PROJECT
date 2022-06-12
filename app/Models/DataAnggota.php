<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    use HasFactory;
    protected $table='data_anggotas'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'id',
        'image',
        'nama',
        'jeniskelamin',
        'alamat',
        'notelp',
        'tanggallahir',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
