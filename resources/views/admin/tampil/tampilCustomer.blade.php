@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Role</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    @foreach ($customers as $customer)
        @if ($customer->role == 'user')
            <tbody>
                <tr>
                    <td scope="row">{{ $customer->id }}</td>
                    <td scope="font-size:15px">{{ $customer->name }}</td>
                    <td scope="font-size:15px">{{ $customer->role }}</td>
                    <td style="display: flex;">
                        <a href="{{ route('edit.customer', $customer->id) }}" class="mr-2">
                            <button class="btn btn-warning" style="width: 100%;">Edit</button>
                        </a>
                        <form action="{{ route('hapus.customer', $customer->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger mx-2" style="width: 100%;">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endif
    @endforeach

</table>
@endsection