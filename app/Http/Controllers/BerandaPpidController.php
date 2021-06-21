<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PPID;

class BerandaPpidController extends Controller
{
    public function __construct()
    {
        $this->Ppid = new Ppid();
    }
   public function index()
   {
       $ppid = [
           'ppid' => $this->Ppid->all(),
       ];
        return view('berandappid', $ppid);
    }
}
