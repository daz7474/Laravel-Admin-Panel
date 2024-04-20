@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-header">
      <h1 class="m-0">Employee ID #{{ $employee->id }}</h1>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
          <img src="https://i.pravatar.cc/250?u={{ $employee->email }}" alt="Avatar" width="250" height="250" class="rounded-circle">
        </div>

        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
          <h2>{{ "$employee->first_name $employee->last_name" }}</h2>
          <p>Email: {{ $employee->email }}</p>
          <p>Phone Number: {{ $employee->phone }}</p>
          

          <div>
            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-info">Edit</a>
            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
          </div>
        </div>

        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
          <h2>Company</h2>
          <a href="/companies/{{ $employee->company_id }}">
            <img src="{{ asset('storage/' . $employee->company->logo) }}" width="150" height="80" alt="Company Logo" class="rounded my-2">
          </a>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection