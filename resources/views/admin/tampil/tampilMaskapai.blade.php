@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Maskapai</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($airlines as $airline)
            <tr>
                <td scope="row">{{ $airline->id }}</td>
                <td scope="font-size: 15px">{{ $airline->name_airline }}</td>
                <td style="display: flex;">
                    <a href="{{ route('edit.maskapai', $airline->id) }}" class="mr-2">
                        <button class="btn btn-warning" style="width: 100%;">Edit</button>
                    </a>
                    <form action="{{ route('hapus', $airline->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger mx-2" style="width: 100%;">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection