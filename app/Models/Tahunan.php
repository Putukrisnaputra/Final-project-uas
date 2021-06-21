<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahunan extends Model
{
            use HasFactory;
        // protected $table='Tahunan';
        //  protected $primaryKey = ' id ';

    protected $fillable=[
        'user_id',"tahun",'file'
    ];
}
