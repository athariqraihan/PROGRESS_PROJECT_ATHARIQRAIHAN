<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index()
    {
        $raks = Rak::latest()->get();
        return view('raks.index', compact('raks'));
    }

    public function create()
    {
        return view('raks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_zona' => 'required|string|max:10',
            'no_lorong' => 'required|string|max:10',
            'kode_rak' => 'required|string|max:10',
            'kapasitas_fisik' => 'required|integer|min:1',
        ], [
            'nama_zona.required' => 'Nama zona wajib dipilih woyy.',
            'no_lorong.required' => 'Nomor lorong wajib dipilih woyy.',
            'kode_rak.required' => 'Kode rak wajib dipilih woyy.',
            'kapasitas_fisik.required' => 'Kapasitas fisik wajib diisi woyy.',
        ]);

        $data = $request->only('nama_zona', 'no_lorong', 'kode_rak', 'kapasitas_fisik');
        Rak::create($data);

        return redirect()->route('raks.index')
            ->with('success', 'Rak berhasil ditambahkan');
    }

    public function show(Rak $rak)
    {
        return view('raks.show', compact('rak'));
    }

    public function edit(string $id)
    {
        $rak = Rak::findOrFail($id);
        
        return view('raks.edit', compact('rak'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_zona' => 'required|string|max:10',
            'no_lorong' => 'required|string|max:10',
            'kode_rak' => 'required|string|max:10',
            'kapasitas_fisik' => 'required|integer|min:1',
         ], [
            'nama_zona.required' => 'Nama zona wajib dipilih woyy.',
            'no_lorong.required' => 'Nomor lorong wajib dipilih woyy.',
            'kode_rak.required' => 'Kode rak wajib dipilih woyy.',
            'kapasitas_fisik.required' => 'Kapasitas fisik wajib diisi woyy.',
        ]);

        $rak = Rak::findOrFail($id);
        $data = $request->only('nama_zona', 'no_lorong', 'kode_rak', 'kapasitas_fisik');
        $rak->update($data);

        return redirect()->route('raks.index')
            ->with('success', 'Rak berhasil diperbarui');
    }

    public function destroy(Rak $rak)
    {
        $rak->delete();

        return redirect()->route('raks.index')
            ->with('success', 'Rak berhasil dihapus');
    }
}
