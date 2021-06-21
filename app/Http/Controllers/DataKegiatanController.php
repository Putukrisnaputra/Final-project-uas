<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class DataKegiatanController extends Controller
{
    public function __construct()
    {
        $this->Kegiatan = new Kegiatan();
    }
   public function index()
   {
       $kegiatan = [
           'kegiatan' => $this->Kegiatan->all(),
       ];
        return view('datakegiatan', $kegiatan);
    }
}
