@extends('layouts.app')

@section('content')
    <div class="py-4">
        <form class="rounded" action="{{ route('input.proses') }}" method="POST" style="border: 1px solid #ccc; padding: 15px;">
            @csrf
            <div class="mb-3">
                <h3>Form Input Maskapai</h3>
                <label for="name_airline" class="form-label py-2">Nama Maskapai</label>
                <input type="text" class="form-control" name="name_airline" id="name_airline" placeholder="Masukkan Maskapai">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
