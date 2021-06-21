<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
              use HasFactory;
        // protected $table='Kinerja';
        //  protected $primaryKey = ' id ';

    protected $fillable=[
        'user_id',"tahun",'file'
    ];
}
