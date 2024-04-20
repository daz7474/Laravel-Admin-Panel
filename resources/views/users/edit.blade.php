@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">Edit {{ $user->name }}</h1>

    <div class="d-flex justify-content-center">
        <form method="POST" action="/users/{{ $user->id }}">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="name">Name: </label>
                <input class="form-control"
                name="name"
                id="name"
                value="{{ old('name', $user->name) }}"
                type="text"
                required
                >

                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="email">Email: </label>
                <input class="form-control"
                name="email"
                id="email"
                value="{{ old('email', $user->email) }}"
                type="email"
                >

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Role --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="role">Role: </label>
                <select class="d-block" name="role" id="role">
                  @foreach (App\Models\User::roles() as $key => $value)
                      <option value="{{ $key }}"
                      {{ old('role', $user->role) == $key ? 'selected' : '' }}>
                        {{ $value }}
                      </option>
                  @endforeach
                </select>

                @error('role')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">
                Submit Changes
            </button>

            <div>
                <a href="/users">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection