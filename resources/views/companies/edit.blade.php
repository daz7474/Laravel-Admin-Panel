@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">Edit {{ $company->name }}</h1>

    <div class="d-flex justify-content-center">
        <form method="POST" action="/companies/{{ $company->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="name">Company Name: </label>
                <input class="form-control"
                name="name"
                id="name"
                type="text"
                value="{{ old('name', $company->name) }}"
                >

                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="email">Company Email: </label>
                <input class="form-control"
                name="email"
                id="email"
                value="{{ old('email', $company->email) }}"
                type="email"
                >

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Logo --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="logo">Company Logo: </label>
                <input class="form-control"
                name="logo"
                id="logo"
                value="{{ old('logo', $company->logo) }}"
                type="file"
                >

                @error('logo')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- Website --}}
            <div class="form-group mb-3">
                <label class="mb-2" for="website">Company Website: </label>
                <input class="form-control"
                name="website"
                id="website"
                value="{{ old('website', $company->website) }}"
                type="website"
                >

                @error('website')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">
                Submit Changes
            </button>

            <div>
              <a href="/companies">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection