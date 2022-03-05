<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('guru.index', compact('gurus'), [
            'title' => 'Data Guru',
            'gurus' => $gurus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create', [
            'title' => 'Tambah Data Guru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGuruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'nip' => 'required|numeric',
            'nuptk' => 'required|numeric',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kepegawaian' => 'required',
            'jenis_ptk' => 'required',
            'no_hp' => 'required|numeric',
        ]);

        Guru::create($validated);

        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        return view('guru.show', compact('guru'), [
            'title' => 'Detail Guru',
            'guru' => $guru
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', [
            'title' => 'Edit Data Guru',
            'guru' => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuruRequest  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nip' => 'required|numeric',
            'nuptk' => 'required|numeric',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kepegawaian' => 'required',
            'jenis_ptk' => 'required',
            'no_hp' => 'required|numeric',
        ]);

        $guru->update($validated);

        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil dihapus');
    }
}
