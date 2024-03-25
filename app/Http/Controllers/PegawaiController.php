<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;
use App\Models\User;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = User::all();
        return view('admin.tampil.tampilPegawai', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $airlines = Airline::all();
        $pegawais = User::find($id);
        return view('admin.crud.editPegawai', compact(['pegawais','airlines']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'airline_id' => 'required',
            'role' => 'required',
        ]);

        $pegawais = User::find($id);
        $pegawais->name = $request->input('name');
        $pegawais->airline_id = $request->input('airline_id');
        $pegawais->role = $request->input('role');

        $pegawais->save();

        return redirect()->route('tampil.pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawais = User::find($id);

        $pegawais->delete();

        return redirect()->route('tampil.pegawai')->with('success', 'Data berhasil diubah!');
    }
}
