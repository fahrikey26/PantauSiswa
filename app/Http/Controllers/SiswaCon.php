<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaMod;

class SiswaCon extends Controller
{
    //
    public function index()
    {
        $siswa = SiswaMod::all(); // Mendapatkan semua data siswa dari model
        return view('siswa.index', compact('siswa'));
    }

    public function tampiledit($id)
    {
        $data = SiswaMod::find($id);
        return view('siswa.update', compact('data'));
    }

    public function update(Request $request)
    {
        $data = SiswaMod::find($request->id);
        $data->Nis = $request->nis;
        $data->Nisn = $request->nisn;
        $data->Nama = $request->nama;
        $data->TempatLahir = $request->tempatLahir;
        $data->TanggalLahir = $request->tanggalLahir;
        $data->JenisKelamin = $request->jenisKelamin;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }
}
