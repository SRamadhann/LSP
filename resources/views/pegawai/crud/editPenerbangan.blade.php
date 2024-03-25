@extends('layouts.app')

@section('content')
<div class="py-4">
    <form class="rounded" action="{{ route('edit.penerbangan.proses', $flights->id) }}" method="POST"
        style="border: 1px solid #ccc; padding: 15px;">
        @csrf
        <h3>Form Edit Penerbangan</h3>    
        <input type="text" class="form-control" name="airline_id" id="airline_id" value="{{ auth()->user()->airline_id }}">
        <div class="mb-2">
            <label for="no_flight" class="form-label py-2">Nomor Penerbangan</label>
            <input type="text" class="form-control" name="no_flight" id="no_flight" value="{{ $flights->no_flight }}" placeholder="Masukkan Nomor Penerbangan">
        </div>

        <div class="mb-2">
            <label for="departure_city" class="form-label py-2">Kota Keberangkatan</label>
            <input type="text" class="form-control" name="departure_city" id="departure_city" value="{{ $flights->departure_city }}" placeholder="Masukkan Kota Keberangkatan">
        </div>

        <div class="mb-2">
            <label for="arrival_city" class="form-label py-2">Kota Tujuan</label>
            <input type="text" class="form-control" name="arrival_city" id="arrival_city" value="{{ $flights->arrival_city }}" placeholder="Masukkan Kota Tujuan">
        </div>

        <div class="mb-2">
            <label for="departure_date" class="form-label py-2">Tanggal Keberangkatan</label>
            <input type="date" class="form-control" name="departure_date" id="departure_date" value="{{ $flights->departure_date }}" placeholder="Masukkan Tanggal Keberangkatan">
        </div>

        <div class="mb-2">
            <label for="departure_time" class="form-label py-2">Waktu Keberangkatan</label>
            <input type="time" class="form-control" name="departure_time" id="departure_time" value="{{ $flights->departure_time }}" placeholder="Masukkan Waktu Keberangkatan">
        </div>

        <div class="mb-2">
            <label for="arrival_date" class="form-label py-2">Tanggal Tiba</label>
            <input type="date" class="form-control" name="arrival_date" id="arrival_date" value="{{ $flights->arrival_date }}" placeholder="Masukkan Tanggal Tiba">
        </div>

        <div class="mb-2">
            <label for="arrival_time" class="form-label py-2">Waktu Tiba</label>
            <input type="time" class="form-control" name="arrival_time" id="arrival_time" value="{{ $flights->arrival_time }}" placeholder="Masukkan Waktu Tiba">
        </div>

        <div class="mb-2">
            <label for="seat_availability" class="form-label py-2">Jumlah Kursi</label>
            <input type="number" class="form-control" name="seat_availability" id="seat_availability" value="{{ $flights->seat_availability }}" placeholder="Masukkan Jumlah Kursi">
        </div>

        <div class="mb-2">
            <label for="price" class="form-label py-2">Harga</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ $flights->price }}" placeholder="Masukkan Harga">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection