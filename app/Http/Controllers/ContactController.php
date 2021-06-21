<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact::all();
        $title="Daftar Contact";
        return view('admin.berandacontact',compact('title','contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="INPUT Contact";
        return view('admin.inputcontact',compact('title'));
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
                'email'=>'required',
                'subjek'=>'required',
                'message'=>'required'
            ],$message);
            $validasi['user_id']=Auth::id();
           Contact::create($validasi);
            return redirect('contact')->with('success','Data Berhasil Tersimpan');
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
        $contact=Contact::find($id);
        $title="Edit Contact";
        return view('admin.inputcontact',compact('title','contact'));
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
                'nama'=>'required|unique:contacts|max:255',
                'email'=>'required',
                'subjek'=>'required',
                'message'=>'required'
            ],$message);
            $validasi['user_id']=Auth::id();
            Contact::where('id',$id)->update($validasi);
            return redirect('contact')->with('success','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $contact=Contact::find($id);
        if($contact != null){
            Storage::delete($contact->gambar);
            $contact=Contact::find($contact->id);
            Contact::where('id',$id)->delete();
        }
        return redirect('contact')->with('sucess','Data berhasil terhapus');
    }
}
