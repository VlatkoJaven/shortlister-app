@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Shortlister Users List</h1>

    <a href="{{ route('shortlister-users.create') }}" class="btn btn-success mb-3">Create New User</a>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ \Carbon\Carbon::parse($user->date_of_birth)->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
    {{ $users->links('pagination::bootstrap-5') }}
    </div>
@endsection
