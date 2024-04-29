@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Employee Details</h1>
    <div class="card my-4 mx-auto" style="min-width: 260px; max-width: 500px;">
      <div class="card-header">
        <h2 class="text-center m-0">{{ "$employee->first_name $employee->last_name" }}</h2>
      </div>
      <div class="card-body-custom p-2">
        <img src="https://i.pravatar.cc/150?u={{ $employee->email }}" alt="Avatar" width="150" height="150" class="rounded-circle my-4">
        <h4>Email:</h4>
        <p>{{ $employee->email }}</p>

        <h4>Phone Number:</h4>
        <p>{{ $employee->phone }}</p>

        <h4>Company:</h4>
        <p>
          <a href="/companies/{{ $employee->company->id }}">
            <p>{{ $employee->company->name }}</p>
            <img src="{{ asset('storage/' . $employee->company->logo) }}" width="150" alt="{{ $employee->company->name }} logo" class="rounded">
          </a>
        </p>

        @admin
        <div class="btn-toolbar">
          <div class="btn-group mx-2">
            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-info mb-2">
              Edit
            </a>
          </div>
          <div class="btn-group mx-2">
            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('This action is permanent. Are you sure?')">
                  Delete
                </button>
            </form>
          </div>
        </div>
        @endadmin
      </div>
    </div>
</div>
@endsection