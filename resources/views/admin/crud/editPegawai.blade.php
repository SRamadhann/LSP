@extends('layouts.app')

@section('content')
<div class="py-4">
    <form class="rounded" action="{{ route('edit.pegawai.proses', $pegawais->id) }}" method="POST" style="border: 1px solid #ccc; padding: 15px;">
        @csrf
        <h3>Form Edit Data Pegawai</h3>
        <div class="mb-3">
            <label for="name" class="form-label py-2">Nama Pegawai</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Pegawai" value="{{ $pegawais->name }}" readonly>
        </div>
        <select class="form-select my-3" name="airline_id" id="airline_id" value="all">
            <option disabled selected >Pilih Maskapai</option>
            @foreach ($airlines as $airline)
                <option value="{{ $airline->id }}">{{ $airline->name_airline }}</option>
            @endforeach
        </select>
        <select class="form-select my-3" name="role" id="role">
            <option disabled selected >Pilih Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection