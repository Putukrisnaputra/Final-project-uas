<?php

namespace App\Http\Controllers;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $pengaduan=Pengaduan::all();
         $title="DATA Pengaduan";
        return view('admin.berandapengaduan',compact('title','pengaduan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="INPUT FORM Pengaduan";
        return view('admin.inputpengaduan',compact('title'));
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
                'nama'=>'required|unique:pengaduans|max:255',
                'jk'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'waktu'=>'required',
                'email'=>'',
                'namaperusahaan'=>'required',
                'alamatperusahaan'=>'required',
                'jenisperusahaan'=>'required',
                'no_telp'=>'required',
                'pengaduan'=>'required',
                'gambar'=>'required|mimes:jpg,bmp,png|max:512'
            ],$message);
             $path = $request->file('gambar')->store('gambarpengaduan');
            $validasi['user_id']=Auth::id();
            $validasi['gambar']=$path;
            Pengaduan::create($validasi);
            return redirect('pengaduan')->with('success','Data Berhasil Tersimpan');
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
        $pengaduan=Pengaduan::find($id);
        $title="Edit pengaduan";
        return view('admin.inputpengaduan',compact('title','pengaduan'));
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
                'nama'=>'required|unique:pengaduans|max:255',
                'jk'=>'required',
                'pekerjaan'=>'required',
                'alamat'=>'required',
                'waktu'=>'required',
                'email'=>'',
                'namaperusahaan'=>'required',
                'alamatperusahaan'=>'required',
                'jenisperusahaan'=>'required',
                'no_telp'=>'required',
                'pengaduan'=>'required'
            ],
        $message);
            if($request->hasFile('gambar')){
            $fileName=time().$request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('gambarpengaduan',$fileName);
                $validasi['gambar']=$path;
                $pengaduan=Pengaduan::find($id);
                Storage::delete($pengaduan->gambar);
            }
            $validasi['user_id']=Auth::id();
            Pengaduan::where('id',$id)->update($validasi);
            return redirect('pengaduan')->with('success','Data Berhasil Terupdate');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan=Pengaduan::find($id);
        if($pengaduan != null){
            Storage::delete($pengaduan->gambar);
            $pengaduan=Pengaduan::find($pengaduan->id);
            Pengaduan::where('id',$id)->delete();
        }
        return redirect('pengaduan')->with('sucess','Data berhasil terhapus');
    }

}

