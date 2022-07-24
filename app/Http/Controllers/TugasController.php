<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model slot
        $tugas = Tugas::all();
        return view('tugas.index', compact('tugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validasi
        $validated = $request->validate([
            'nis' => 'required|unique:Tugas|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $tugas = new Tugas();
        $tugas->nis = $request->nis;
        $tugas->nama = $request->nama;
        $tugas->alamat = $request->alamat;
        $tugas->tgl_lahir = $request->tgl_lahir;
        $tugas->save();
        return redirect()->route('tugas.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tugas = Tugas::findOrFail($id);
        return view('tugas.show', compact('tugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tugas = Tugas::findOrFail($id);
        return view('tugas.edit', compact('tugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // Validasi
        $validated = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $tugas = Tugas::findOrFail($id);
        $tugas->nis = $request->nis;
        $tugas->nama = $request->nama;
        $tugas->alamat = $request->alamat;
        $tugas->tgl_lahir = $request->tgl_lahir;
        $tugas->save();
        return redirect()->route('tugas.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();
        return redirect()->route('tugas.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
