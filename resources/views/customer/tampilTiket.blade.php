@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Maskapai</th>
            <th scope="col">No. Penerbangan</th>
            <th scope="col">Kota Keberangkatan</th>
            <th scope="col">Kota Tujuan</th>
            <th scope="col">Tanggal Keberangkatan</th>
            <th scope="col">Waktu Keberangkatan</th>
            <th scope="col">Tanggal Tiba</th>
            <th scope="col">Waktu Tiba</th>
            <th scope="col">Jumlah Kursi</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    @foreach ($flights as $flight)
            <tbody>
                <tr>
                    <td scope="row">{{ $flight->id }}</td>
                    <td scope="font-size:8px">{{ $flight->airline->name_airline }}</td>
                    <td scope="font-size:8px">{{ $flight->no_flight }}</td>
                    <td scope="font-size:8px">{{ $flight->departure_city }}</td>
                    <td scope="font-size:8px">{{ $flight->arrival_city }}</td>
                    <td scope="font-size:8px">{{ $flight->departure_date }}</td>
                    <td scope="font-size:8px">{{ $flight->departure_time }}</td>
                    <td scope="font-size:8px">{{ $flight->arrival_date }}</td>
                    <td scope="font-size:8px">{{ $flight->arrival_time }}</td>
                    <td scope="font-size:8px">{{ $flight->seat_availability }}</td>
                    <td scope="font-size:8px">{{ $flight->price }}</td>
                    <td style="display: flex;">
                        <a href="{{ route('beli.tiket', $flight->id) }}" class="mr-2">
                            <button class="btn btn-warning" style="width: 100%;">Beli Tiket</button>
                        </a>
                    </td>   
                </tr>
            </tbody>
    @endforeach

</table>

@endsection