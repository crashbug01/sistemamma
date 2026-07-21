<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pesertaController extends Controller
{
    public function index()
    {
        $peserta = peserta::all();
        return view("peserta.tabel", ['peserta' => $peserta]);
    }

    public function form()
    {
        return view("peserta.form");
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'no_whatsapp' => 'required|string|max:255',
            'surat_id' => 'required|integer',
            'jam_belajar' => 'required|string|max:255',
        ]);

        peserta::create($validate);

        if ($validate) {
            return redirect('/tabel-peserta')->with('success', 'Peserta berhasil ditambahkan');
        } else {
            return redirect('/form-peserta')->with('error', 'Peserta gagal ditambahkan');
        }
    }

    public function destroy(peserta $peserta)
    {
        $peserta->delete();
        return redirect('/tabel-peserta');
    }
}
