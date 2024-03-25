<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airlines = Airline::all();
        return view('admin.tampil.tampilMaskapai', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crud.maskapai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_airline' => 'required',
        ]);

        $input = new Airline();
        $input->name_airline = $request->input('name_airline');

        $input->save();

        return redirect()->route('tampil.maskapai');
    }

    /**
     * Display the specified resource.
     */
    public function show(Airline $airline)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $airlines = Airline::find($id);
        return view('admin.crud.edit', compact('airlines'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name_airline'=>'required',
        ]);

        $airlines = Airline::find($id);
        $airlines->name_airline = $request->input('name_airline');

        $airlines->save();

        return redirect()->route('tampil.maskapai')->with(['success' => 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $airlines = Airline::find($id);

        $airlines->delete();

        return redirect()->route('tampil.maskapai')->with(['success' => 'Data berhasil dihapus!']);
    }
}
