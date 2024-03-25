<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airlineId = auth()->user()->airline_id;
        $flights = Flight::where('airline_id',$airlineId)->get();
        return view('pegawai.tampil.tampilPenerbangan', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $airlines = Airline::all();
        return view('pegawai.crud.inputPenerbangan', compact('airlines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'airline_id' => 'required',
            'no_flight' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_date' => 'required',
            'departure_time' => 'required',
            'arrival_date' => 'required',
            'arrival_time' => 'required',
            'seat_availability' => 'required',
            'price' => 'required',
        ]);

        $input = new Flight();
        $input->airline_id = $request->input('airline_id');
        $input->no_flight = $request->input('no_flight');
        $input->departure_city = $request->input('departure_city');
        $input->arrival_city = $request->input('arrival_city');
        $input->departure_date = $request->input('departure_date');
        $input->departure_time = $request->input('departure_time');
        $input->arrival_date = $request->input('arrival_date');
        $input->arrival_time = $request->input('arrival_time');
        $input->seat_availability = $request->input('seat_availability');
        $input->price = $request->input('price');

        $input->save();

        return redirect()->route('tampil.penerbangan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $flight, $id)
    {
        $flights = Flight::find($id);
        return view('pegawai.crud.editPenerbangan', compact('flights'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $flight, $id)
    {
        $validate = $request->validate([
            'airline_id' => 'required',
            'no_flight' => 'required',
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_date' => 'required',
            'departure_time' => 'required',
            'arrival_date' => 'required',
            'arrival_time' => 'required',
            'seat_availability' => 'required',
            'price' => 'required',
        ]);

        $input = Flight::find($id);
        $input->update($request->all());

        return redirect()->route('tampil.penerbangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight, $id)
    {
        $flights = Flight::find($id);

        $flights->destroy();

        return redirect()->route('tampil.penerbangan');
    }
}
