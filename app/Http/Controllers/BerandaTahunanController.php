<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tahunan;

class BerandaTahunanController extends Controller
{
    public function __construct()
    {
        $this->Tahunan = new Tahunan();
    }
   public function index()
   {
       $tahunan = [
           'tahunan' => $this->Tahunan->all(),
       ];
        return view('berandatahunan', $tahunan);
    }
}
