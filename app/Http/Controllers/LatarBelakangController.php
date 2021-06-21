<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatarBelakangController extends Controller
{
    public function index(){
        return view('latarbelakang');
    }
}
