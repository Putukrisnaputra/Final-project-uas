<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Triwulan;

class BerandaTriwulanController extends Controller
{
    public function __construct()
    {
        $this->Triwulan = new Triwulan();
    }
   public function index()
   {
       $triwulan = [
           'triwulan' => $this->Triwulan->all(),
       ];
        return view('berandatriwulan', $triwulan);
    }
}
