<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triwulan extends Model
{
     use HasFactory;
        // protected $table='Triwulan';
        //  protected $primaryKey = ' id ';

    protected $fillable=[
        'user_id',"tahun",'file'
    ];
}
