<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use App\Models\DataBuku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('peminjaman.index',[
            'peminjaman'=> Peminjaman::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('peminjaman.create',[
            'users'=> User::all(),
            'data_bukus'=> DataBuku::all(),
            'data_anggotas'=>DataAnggota::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $tes=$request->validate([
            'anggotas_id' => 'required',
            'bukus_id' => 'required',
            'tanggal_pinjam' => 'required',
            'lama_peminjaman' => 'required',
            'user_id' => 'required',
            'status' => 'required',
            ]);
            Peminjaman::create($tes);
            return redirect('/transaksipeminjaman')
            ->with('success', 'Data Peminjaman Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman, $id)
    {
        $tes=Peminjaman::where('id', $id)->first();
        return view('peminjaman.edit', [
            'peminjamans' => $tes,
            'users'=> User::all(),
            'data_anggotas'=>DataAnggota::all(),
            'data_bukus'=>DataBuku::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman, $id)
    {
        $tes=Peminjaman::where('id', $id)->get();
        $rules = [
            'anggotas_id' => 'required',
            'bukus_id' => 'required',
            'tanggal_pinjam' => 'required',
            'lama_peminjaman' => 'required',
                        
        ];

        $validateData = $request->validate($rules);
        Peminjaman::where('id',  $id)->update($validateData);
        return redirect('/transaksipeminjaman')->with('toast_success', 'Peminjaman Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman,$id)
    {
        Peminjaman::destroy($id);
        return redirect('/transaksipeminjaman')->with('toast_success', 'Peminjaman Berhasil Dihapus!');
    }
}
