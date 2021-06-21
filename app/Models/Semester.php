<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
              use HasFactory;
        // protected $table='Semester';
        //  protected $primaryKey = ' id ';

    protected $fillable=[
        'user_id',"tahun",'file'
    ];
}
