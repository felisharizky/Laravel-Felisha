<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Http\Requests\StorePetugasRequest;
use App\Http\Requests\UpdatePetugasRequest;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugases = Petugas::all();
        return view('petugas.index', compact('petugases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetugasRequest $request ,Petugas $petugas)
    {
        //
        $petugas->create($request->all());   
        
        return redirect()->route("petugas.index")->with(['success' => 'Data'. $request['nama_petugas'] . 'Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $petugas = Petugas::find($id);
        return view('petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petuga)
    {
        //
        return view ('petugas.edit', compact('petuga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetugasRequest $request, Petugas $petuga)
    {
        //
        $petuga->update($request->all());   
        return redirect()->route("petugas.index")->with(['success' => 'Data Berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petuga)
    {
        //
        $petuga->delete();
        return redirect()->route('petugas.index')->with(['success'=>'Data Telah Dihapus']);
    }
}