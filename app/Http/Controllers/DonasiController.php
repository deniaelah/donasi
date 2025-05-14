<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function form()
    {
        return view('donasi.form');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'nullable|email',
            'jumlah' => 'required|numeric|min:1000',
        ]);

        Donasi::create($request->only('nama', 'email', 'jumlah', 'pesan'));

        return redirect('/donasi')->with('success', 'Terima kasih atas donasinya!');
    }

    public function index()
    {
        $donasis = Donasi::latest()->get();
        return view('donasi.index', compact('donasis'));
    }
}
