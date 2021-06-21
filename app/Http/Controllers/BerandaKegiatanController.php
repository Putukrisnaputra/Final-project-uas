<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class BerandaKegiatanController extends Controller
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
        return view('berandakegiatan', $kegiatan);
    }
}
