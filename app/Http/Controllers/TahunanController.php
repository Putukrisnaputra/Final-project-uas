<?php

namespace App\Http\Controllers;
use App\Models\Tahunan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class TahunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahunan=Tahunan::all();
        $title="Tahunan";
        return view('admin.berandatahunan',compact('title','tahunan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title="INPUT Tahunan";
        return view('admin.inputtahunan',compact('title'));
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
            $path = $request->file('file')->store('file2');
            $validasi['user_id']=Auth::id();
            $validasi['file']=$path;
            Tahunan::create($validasi);
            return redirect('tahunan')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tahunan=Tahunan::findOrFail($id);
         return view('admin.tahunanshow',compact('tahunan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $tahunan=Tahunan::find($id);
            $title="Edit Laporan Tahunan";
            return view('admin.inputtahunan',compact('title','tahunan'));
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
            $path = $request->file('file')->storeAs('file2',$fileName);
                $validasi['file']=$path;
                $tahunan=Tahunan::find($id);
                Storage::delete($tahunan->file);
            }
            $validasi['user_id']=Auth::id();
            Tahunan::where('id',$id)->update($validasi);
            return redirect('tahunan')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tahunan=Tahunan::find($id);
        if($tahunan != null){
            Storage::delete($tahunan->file);
            $tahunan=Tahunan::find($tahunan->id);
            Tahunan::where('id',$id)->delete();
        }
        return redirect('tahunan')->with('sucess','Data berhasil terhapus');
    }
}
