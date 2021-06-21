<?php

namespace App\Http\Controllers;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semester=Semester::all();
        $title="Laporan Semester";
        return view('admin.berandasemester',compact('title','semester'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title="Input Laporan Semester";
        return view('admin.inputsemester',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $message=[
            'required'=> 'Kolom :attribute Harus Lengkap',
            'date'=>'Kolom :attribute Harus Tanggal',
            'numeric'=>'Kolom :attribute Harus Angka',
            ];
            $validasi=$request->validate([
                'tahun'=>'required',
                'file'=>'required|mimes:pdf'
            ],$message);
            $path = $request->file('file')->store('filesemester');
            $validasi['user_id']=Auth::id();
            $validasi['file']=$path;
             Semester::create($validasi);
            return redirect('semester')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $semester=Semester::findOrFail($id);
         return view('admin.semestershow',compact('semester'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $semester=Semester::find($id);
            $title="Edit Laporan Semester";
            return view('admin.inputsemester',compact('title','semester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $message=[
            'required'=> 'Kolom :attribute Harus Lengkap',
            'date'=>'Kolom :attribute Harus Tanggal',
            'numeric'=>'Kolom :attribute Harus Angka',
            ];
            $validasi=$request->validate([
                'tahun'=>'required',   
            ],$message);
            if($request->hasFile('file')){
            $fileName=time().$request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('filesemester',$fileName);
                $validasi['file']=$path;
                $semester=Semester::find($id);
                Storage::delete($semester->file);
            }
            $validasi['user_id']=Auth::id();
            Semester::where('id',$id)->update($validasi);
            return redirect('semester')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $semester=Semester::find($id);
        if($semester != null){
            Storage::delete($semester->file);
            $semester=Semester::find($semester->id);
            Semester::where('id',$id)->delete();
        }
        return redirect('semester')->with('sucess','Data berhasil terhapus');
    }
}
