<?php

namespace App\Http\Controllers;
use App\Models\Triwulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class TriwulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $triwulan=Triwulan::all();
        $title="Triwulan";
        return view('admin.berandatriwulan',compact('title','triwulan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title="INPUT Triwulan";
        return view('admin.inputtriwulan',compact('title'));
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
            $path = $request->file('file')->store('filetriwulan');
            $validasi['user_id']=Auth::id();
            $validasi['file']=$path;
            Triwulan::create($validasi);
            return redirect('triwulan')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $triwulan=Triwulan::findOrFail($id);
         return view('admin.triwulanshow',compact('triwulan')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $triwulan=Triwulan::find($id);
            $title="Edit Laporan Triwulan";
            return view('admin.inputtriwulan',compact('title','triwulan'));
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
            $path = $request->file('file')->storeAs('filetriwulan',$fileName);
                $validasi['file']=$path;
                $triwulan=Triwulan::find($id);
                Storage::delete($triwulan->file);
            }
            $validasi['user_id']=Auth::id();
            Triwulan::where('id',$id)->update($validasi);
            return redirect('triwulan')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $triwulan=Triwulan::find($id);
        if($triwulan != null){
            Storage::delete($triwulan->file);
            $triwulan=Triwulan::find($triwulan->id);
            Triwulan::where('id',$id)->delete();
        }
        return redirect('triwulan')->with('sucess','Data berhasil terhapus');
    }
}
