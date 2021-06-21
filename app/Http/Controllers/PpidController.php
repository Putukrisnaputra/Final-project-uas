<?php

namespace App\Http\Controllers;
use App\Models\PPID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PpidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PPID=PPID::all();
        $title="PPID";
        return view('admin.berandaPPID',compact('title','PPID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title="INPUT PPID";
        return view('admin.inputPPID',compact('title'));
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
            PPID::create($validasi);
            return redirect('PPID')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $PPID=PPID::findOrFail($id);
         return view('admin.PPIDshow',compact('PPID')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $PPID=PPID::find($id);
            $title="Edit Laporan PPID";
            return view('admin.inputPPID',compact('title','PPID'));
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
                $PPID=PPID::find($id);
                Storage::delete($PPID->file);
            }
            $validasi['user_id']=Auth::id();
            PPID::where('id',$id)->update($validasi);
            return redirect('PPID')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $PPID=PPID::find($id);
        if($PPID != null){
            Storage::delete($PPID->file);
            $PPID=PPID::find($PPID->id);
            PPID::where('id',$id)->delete();
        }
        return redirect('PPID')->with('sucess','Data berhasil terhapus');
    }
}
