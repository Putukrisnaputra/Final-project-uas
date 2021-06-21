<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class BerandaSemesterController extends Controller
{
    public function __construct()
    {
        $this->Semester = new Semester();
    }
   public function index()
   {
       $semester = [
           'semester' => $this->Semester->all(),
       ];
        return view('berandasemester', $semester);
    }
}
