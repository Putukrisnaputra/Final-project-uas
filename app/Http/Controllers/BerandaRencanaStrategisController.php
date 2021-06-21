<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RencanaStrategis;

class BerandaRencanaStrategisController extends Controller
{
    public function __construct()
    {
        $this->RencanaStrategis = new RencanaStrategis();
    }
   public function index()
   {
       $rencanastrategis = [
           'rencanastrategis' => $this->RencanaStrategis->all(),
       ];
        return view('berandarencanastrategis', $rencanastrategis);
    }
}
