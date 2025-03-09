@extends('layouts.app')

@section('content')
    <div class="card p-4">
        <h1 class="mb-4">Create User</h1>

        <form action="{{ route('shortlister-users.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="form-control" value="{{ old('full_name') }}" required>
                @error('full_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}" required>
                @error('date_of_birth') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>
@endsection
