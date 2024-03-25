@extends('layouts.app')

@section('content')
<div class="py-4">
    <form class="rounded" action="{{ route('edit.proses', $airlines->id) }}" method="POST" style="border: 1px solid #ccc; padding: 15px;">
        @csrf
        <div class="mb-3">
            <h3>Form Edit Maskapai</h3>
            <label for="name_airline" class="form-label py-2">Nama Maskapai</label>
            <input type="text" class="form-control" name="name_airline" id="name_airline" placeholder="Masukkan Maskapai" value="{{ $airlines->name_airline }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection