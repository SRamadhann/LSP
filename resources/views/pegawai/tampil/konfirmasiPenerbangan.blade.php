@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-center">Daftar Konfirmasi Ticket</h2>
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>No.Booking</th>
                                <th>Nama Pemesan</th>
                                <th>Nama Penumpang</th>
                                <th>Departure City</th>
                                <th>Arrival City</th>
                                <th>Departure Date</th>
                                <th>Arrival Date</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($transactions as $transaction)
                                @if ($transaction->payment_status == 'not_confirmed')
                                    <tr>
                                        <td>{{ $transaction->no_booking }}</td>
                                        <td>{{ $transaction->customer_name }}</td>
                                        <td>{{ $transaction->passanger_name }}</td>
                                        <td>{{ $transaction->flight->departure_city }}</td>
                                        <td>{{ $transaction->flight->arrival_city }}</td>
                                        <td>{{ $transaction->flight->departure_date }}</td>
                                        <td>{{ $transaction->flight->arrival_date }}</td>
                                        <td>{{ $transaction->total_price }}</td>
                                        <td>
                                            <form action="{{ route('konfirmasi.penerbangan.proses', $transaction->id) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Konfirmasi</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-center">Daftar Ticket Terkonfirmasi</h2>
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>No.Booking</th>
                                <th>Nama Pemesan</th>
                                <th>Nama Penumpang</th>
                                <th>Departure City</th>
                                <th>Arrival City</th>
                                <th>Departure Date</th>
                                <th>Arrival Date</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($transactions as $transaction)
                                @if ($transaction->payment_status == 'Success')
                                    <tr>
                                        <td>{{ $transaction->no_booking }}</td>
                                        <td>{{ $transaction->customer_name }}</td>
                                        <td>{{ $transaction->passanger_name }}</td>
                                        <td>{{ $transaction->flight->departure_city }}</td>
                                        <td>{{ $transaction->flight->arrival_city }}</td>
                                        <td>{{ $transaction->flight->departure_date }}</td>
                                        <td>{{ $transaction->flight->arrival_date }}</td>
                                        <td>{{ $transaction->total_price }}</td>
                                        <td>{{ $transaction->payment_status }}</td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection