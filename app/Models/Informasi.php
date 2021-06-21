<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
     use HasFactory;
        // protected $table='Kegiatan';
        //  protected $primaryKey = ' id ';

    protected $fillable=[
        'user_id',"nama",'jk','pekerjaan','alamat','waktu','email','namaperusahaan',
        'alamatperusahaan','jenisperusahaan','no_telp','pertanyaan','gambar'
    ];
}
