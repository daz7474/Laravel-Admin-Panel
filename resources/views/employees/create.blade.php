@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">New Employee</h1>

    <div class="d-flex justify-content-center">
        <form method="POST" action="/employees">
            @csrf

            {{-- First Name --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="first_name">First Name: </label>
                <input class="form-control"
                name="first_name"
                id="first_name"
                type="text"
                required
                >

                @error('first_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Last Name --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="last_name">Last Name: </label>
                <input class="form-control"
                name="last_name"
                id="last_name"
                type="text"
                required
                >

                @error('last_name')
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
                >

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Company --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="company_id">Company: </label>
                <select class="d-block" name="company_id" id="company_id">
                    @foreach (\App\Models\Company::all() as $company)
                        <option value="{{ $company->id }}">
                            {{ ucwords($company->name) }}
                        </option>
                    @endforeach
                </select>

                @error('company_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Phone Number --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="phone">Phone Number: </label>
                <input class="form-control"
                name="phone"
                id="phone"
                type="text"
                >

                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">
                Add Employee
            </button>

            <div>
                <a href="/employees">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection