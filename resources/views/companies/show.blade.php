@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-header">
      <h1 class="m-0">{{ $company->name }}</h1>
    </div>

    <div class="card-body d-flex justify-content-between align-items-center">
      <img src="{{ asset('storage/' . $company->logo) }}" width="150" height="100" alt="Company Logo" class="rounded my-2">

      <p>{{ $company->email }}</p>
      <p><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
  
      <div>
        <a href="{{ route('companies.edit', $company) }}" class="btn btn-info">Edit</a>
        <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
  
        <button type="submit" class="btn btn-danger" onclick="return confirm('This will delete all employees associated with this company, continue?')">Delete</button>
        </form>
      </div>
    </div>
  </div>

  <div class="card my-3">
    <div class="card-header">
      <h2 class="m-0">Employees</h2>
    </div>
    <table class="table text-center">
      <thead>
          <tr>
              <th>Avatar</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Company</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($company->employees as $employee)
          <tr class="align-middle">
              <td><img src="https://i.pravatar.cc/60?u={{ $employee->email }}" alt="Avatar" width="60" height="60" class="rounded-circle"></td>
              <td>{{ "$employee->first_name $employee->last_name" }}</td>
              <td>{{ $employee->email }}</td>
              <td>{{ $employee->phone }}</td>
              <td>{{ $employee->company->name }}</td>
              <td>
                  <a href="/employees/{{ $employee->id }}" class="btn btn-warning">View</a>
                  <a href="{{ route('employees.edit', $employee) }}" class="btn btn-info">Edit</a>
                  <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection