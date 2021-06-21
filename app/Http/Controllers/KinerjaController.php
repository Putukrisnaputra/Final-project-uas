<?php

namespace App\Http\Controllers;
use App\Models\Kinerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class KinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kinerja=Kinerja::all();
        $title="kinerja";
        return view('admin.berandakinerja',compact('title','kinerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title="INPUT kinerja";
        return view('admin.inputkinerja',compact('title'));
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
            $path = $request->file('file')->store('filekinerja');
            $validasi['user_id']=Auth::id();
            $validasi['file']=$path;
            kinerja::create($validasi);
            return redirect('kinerja')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kinerja=Kinerja::findOrFail($id);
         return view('admin.kinerjashow',compact('kinerja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $kinerja=Kinerja::find($id);
            $title="Edit Laporan kinerja";
            return view('admin.inputkinerja',compact('title','kinerja'));
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
            $path = $request->file('file')->storeAs('filekinerja',$fileName);
                $validasi['file']=$path;
                $kinerja=Kinerja::find($id);
                Storage::delete($kinerja->file);
            }
            $validasi['user_id']=Auth::id();
            Kinerja::where('id',$id)->update($validasi);
            return redirect('kinerja')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kinerja=Kinerja::find($id);
        if($kinerja != null){
            Storage::delete($kinerja->file);
            $kinerja=Kinerja::find($kinerja->id);
            Kinerja::where('id',$id)->delete();
        }
        return redirect('kinerja')->with('sucess','Data berhasil terhapus');
    }
}
