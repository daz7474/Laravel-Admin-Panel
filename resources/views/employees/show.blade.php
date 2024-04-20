@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Employee Details</h1>
    <div class="card my-3">
      <div class="card-header">
        <h2 class="m-0">{{ "$employee->first_name $employee->last_name" }}</h2>
      </div>
      <div class="table-responsive">
        <table class="table text-center">
          <thead>
              <tr>
                  <th>Avatar</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Company</th>
                  @admin
                  <th>Actions</th>
                  @endadmin
              </tr>
          </thead>
          <tbody>
              <tr class="align-middle">
                  <td><img src="https://i.pravatar.cc/150?u={{ $employee->email }}" alt="Avatar" width="150" height="150" class="rounded-circle"></td>
                  <td>{{ $employee->email }}</td>
                  <td>{{ $employee->phone }}</td>
                  <td>
                    <a href="/companies/{{ $employee->company->id }}">
                      {{ $employee->company->name }}
                    </a>
                  </td>
                  <td>
  
                      @admin
                      <a href="{{ route('employees.edit', $employee) }}" class="btn btn-info mb-2">Edit</a>
                      <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline-block;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('This action is permanent. Are you sure?')">Delete</button>
                      </form>
                      @endadmin
                  </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection