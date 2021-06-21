<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan=Kegiatan::all();
        $title="DAFTAR KEGIATAN";
        return view('admin.berandakegiatan',compact('title','kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title="INPUT KEGIATAN";
        return view('admin.inputkegiatan',compact('title'));
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
                'nama'=>'required',
                'waktu'=>'required',
                'description'=>'required',
                'gambar'=>'required|mimes:jpg,bmp,png|max:512'
            ],$message);
            $path = $request->file('gambar')->store('gambars1');
            $validasi['user_id']=Auth::id();
            $validasi['gambar']=$path;
            Kegiatan::create($validasi);
            return redirect('kegiatan')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kegiatan=Kegiatan::findOrFail($id);
         return view('admin.kegiatanshow',compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $kegiatan=Kegiatan::find($id);
            $title="Edit Kegiatan";
            return view('admin.inputkegiatan',compact('title','kegiatan'));
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
                'nama'=>'required',
                'waktu'=>'required',
                'description'=>'required'   
            ],$message);
            if($request->hasFile('gambar')){
            $fileName=time().$request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('gambars1',$fileName);
                $validasi['gambar']=$path;
                $kegiatan=Kegiatan::find($id);
                Storage::delete($kegiatan->gambar);
            }
            $validasi['user_id']=Auth::id();
            Kegiatan::where('id',$id)->update($validasi);
            return redirect('kegiatan')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kegiatan=Kegiatan::find($id);
        if($kegiatan != null){
            Storage::delete($kegiatan->gambar);
            $kegiatan=Kegiatan::find($kegiatan->id);
            Kegiatan::where('id',$id)->delete();
        }
        return redirect('kegiatan')->with('sucess','Data berhasil terhapus');
    }
}
