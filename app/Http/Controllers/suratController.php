<?php

namespace App\Http\Controllers;

use App\Models\surat;
use Illuminate\Http\Request;

class suratController extends Controller
{
    public function index()
    {
        $surat = surat::all();
        return view("surat.tabel", ['surat' => $surat]);
    }

    public function form()
    {
        return view("surat.form");
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_surat' => 'required|string|max:255',
            'no_surat' => 'required|string|max:255',
            'juz' => 'required|string|max:255',
        ]);

        surat::create($validate);

        if ($validate) {
            return redirect('/tabel-surat')->with('success', 'Surat berhasil ditambahkan');
        } else {
            return redirect('/form-surat')->with('error', 'Surat gagal ditambahkan');
        }
    }

    public function destroy(surat $surat)
    {
        $surat->delete();
        return redirect('/tabel-surat');
    }
}
