<?php

namespace App\Http\Controllers;
use App\Models\Informasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi=Informasi::all();
         $title="DATA INFORMASI";
        return view('admin.berandainformasi',compact('title','informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="INPUT FORM INFORMASI";
        return view('admin.inputinformasi',compact('title'));
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
                'nama'=>'required|unique:informasis|max:255',
                'jk'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'waktu'=>'required',
                'email'=>'',
                'namaperusahaan'=>'required',
                'alamatperusahaan'=>'required',
                'jenisperusahaan'=>'required',
                'no_telp'=>'required',
                'pertanyaan'=>'required',
                'gambar'=>'required|mimes:jpg,bmp,png|max:512'
            ],$message);
             $path = $request->file('gambar')->store('gambars2');
            $validasi['user_id']=Auth::id();
            $validasi['gambar']=$path;
            Informasi::create($validasi);
            return redirect('informasi')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi=Informasi::find($id);
        $title="Edit informasi";
        return view('admin.inputinformasi',compact('title','informasi'));
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
                'nama'=>'required|unique:informasis|max:255',
                'jk'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'waktu'=>'required',
                'email'=>'',
                'namaperusahaan'=>'required',
                'alamatperusahaan'=>'required',
                'jenisperusahaan'=>'required',
                'no_telp'=>'required',
                'pertanyaan'=>'required'
            ],
        $message);
            if($request->hasFile('gambar')){
            $fileName=time().$request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('gambars2',$fileName);
                $validasi['gambar']=$path;
                $informasi=Informasi::find($id);
                Storage::delete($informasi->gambar);
            }
            $validasi['user_id']=Auth::id();
            Informasi::where('id',$id)->update($validasi);
            return redirect('informasi')->with('success','Data Berhasil Terupdate');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi=Informasi::find($id);
        if($informasi != null){
            Storage::delete($informasi->gambar);
            $informasi=Informasi::find($informasi->id);
            Informasi::where('id',$id)->delete();
        }
        return redirect('informasi')->with('sucess','Data berhasil terhapus');
    }

}
