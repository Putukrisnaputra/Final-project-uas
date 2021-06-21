<?php

namespace App\Http\Controllers;
use App\Models\RencanaStrategis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class RencanaStrategisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rencanastrategis=RencanaStrategis::all();
        $title="RENCANA STRATEGIS";
        return view('admin.berandarencanastrategis',compact('title','rencanastrategis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title="INPUT RENCANA STRATEGIS";
        return view('admin.inputrencanastrategis',compact('title'));
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
            $path = $request->file('file')->store('file1');
            $validasi['user_id']=Auth::id();
            $validasi['file']=$path;
            RencanaStrategis::create($validasi);
            return redirect('rencanastrategis')->with('success','Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rencanastrategis=RencanaStrategis::findOrFail($id);
         return view('admin.rencanastrategisshow',compact('rencanastrategis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $rencanastrategis=RencanaStrategis::find($id);
            $title="Edit Rencana Strategis";
            return view('admin.inputrencanastrategis',compact('title','rencanastrategis'));
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
            $path = $request->file('file')->storeAs('file1',$fileName);
                $validasi['file']=$path;
                $rencanastrategis=RencanaStrategis::find($id);
                Storage::delete($rencanastrategis->file);
            }
            $validasi['user_id']=Auth::id();
            RencanaStrategis::where('id',$id)->update($validasi);
            return redirect('rencanastrategis')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $rencanastrategis=RencanaStrategis::find($id);
        if($rencanastrategis != null){
            Storage::delete($rencanastrategis->file);
            $rencanastrategis=RencanaStrategis::find($rencanastrategis->id);
            RencanaStrategis::where('id',$id)->delete();
        }
        return redirect('rencanastrategis')->with('sucess','Data berhasil terhapus');
    }
}
