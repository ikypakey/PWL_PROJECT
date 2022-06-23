<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('anggota.index',[
            'data_anggotas'=> DataAnggota::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create',[
            'data_anggotas'=> DataAnggota::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek=$request->validate([
            'image' => 'required',
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'tanggallahir' => 'required',
            ]);
            if ($request->file('image')) {
                $cek['image'] = $request->file('image')->store('data_anggotas', 'public');
            }
            DataAnggota::create($cek);
            return redirect('/dataanggota')
            ->with('success', 'Anggota Berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cek=DataAnggota::where('id', $id)->first();
        return view('anggota.detail', [
            'data_anggotas' => $cek,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cek=DataAnggota::where('id', $id)->first();
        return view('anggota.edit', [
            'data_anggotas' => $cek,
        ]);
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
        $rules = [
            'image' => 'required',
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'tanggallahir' => 'required',
        ];

        $validatedata = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedata['image'] = $request->file('image')->store('data_anggotas', 'public');
        }

        DataAnggota::where('id', $id)->update($validatedata);


        return redirect('/dataanggota')->with('toast_success', 'Anggota berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataAnggota::destroy($id);
        return redirect('/dataanggota')->with('toast_success', 'Anggota berhasil di hapus!');
    }

    public function cetak_pdf(){
        $articles = DataAnggota::all();
        $pdf = PDF::loadview('anggota.pdf',['data_anggotas'=>$articles]);
        return $pdf->stream();
    }
}