<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kinerja;

class BerandaKinerjaController extends Controller
{
    public function __construct()
    {
        $this->Kinerja = new Kinerja();
    }
   public function index()
   {
       $kinerja = [
           'kinerja' => $this->Kinerja->all(),
       ];
        return view('berandakinerja', $kinerja);
    }
}
