@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">New User</h1>

    <div class="d-flex justify-content-center">
        <form method="POST" action="/users">
            @csrf

            {{-- Name --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="name">Name: </label>
                <input class="form-control"
                name="name"
                id="name"
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
                type="email"
                required
                >

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="form-group mb-3">
              <label class="mb-2" for="password">Password: </label>
              <input class="form-control"
              name="password"
              id="password"
              type="password"
              required
              >

              @error('password')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
          </div>

          {{-- Confirm Password --}}
          <div class="form-group mb-3">
            <label class="mb-2" for="password_confirmation">Confirm Password: </label>
            <input class="form-control"
            name="password_confirmation"
            id="password_confirmation"
            type="password"
            required
            >

            @error('password_confirmation')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

            {{-- Role --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="role">Role: </label>
                <select class="d-block" name="role" id="role">
                  @foreach (App\Models\User::roles() as $key => $value)
                      <option value="{{ $key }}">{{ $value }}</option>
                  @endforeach
                </select>

                @error('role')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">
                Add User
            </button>

            <div>
                <a href="/users">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection