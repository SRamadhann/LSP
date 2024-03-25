<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Airline;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();
        return view('customer.tampilTiket', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $flights = Flight::find($id);
        $no_booking = $this->no_book($flights->no_flight, $flights->airline->name, auth()->user()->id);
        return view('customer.beliTiket', compact('flights', 'no_booking'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_booking' => 'required',
            'user_id' => 'required',
            'customer_name' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
            'passanger_name' => 'required',
            'flight_id' => 'required',
            'airline_id' => 'required',
            'total_price' => 'required|integer',
            'payment_status' => 'required',
        ]);

        $flight = Flight::find($request->flight_id);
        $airline = Airline::find($request->airline_id);

        $no_booking = $this->no_book($flight->no_flight, $airline->name, $request->user_id);

        Transaction::create($request->all());

        $request->merge(['no_booking' => $no_booking]);
        return redirect()->route('tampil.tiket');
    }

    private function no_book($no_flight, $airline, $user_id)
    {

        $booking_number = 'BOOK_' . $no_flight . '_' . $airline . '_' . $user_id;

        return $booking_number;
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $usersId = auth()->user()->id;
        $transactions = Transaction::where('user_id', $usersId)->get();;
        return view('customer.historyTiket', compact('transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        $transactions = Transaction::all();
        return view('pegawai.tampil.konfirmasiPenerbangan', compact('transactions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction, $id)
    {
        $transactions = Transaction::find($id);
        $transactions->payment_status = 'Success';
        $transactions->save();
        return redirect()->route('konfirmasi.penerbangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
