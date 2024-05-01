@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Company Details</h1>
  <div class="card my-4">
    <div class="card-header">
      <h2 class="m-0">{{ $company->name }}</h2>
    </div>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
              <th>Logo</th>
              <th>Email</th>
              <th>Website</th>
              <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="align-middle">
              <td><img src="{{ asset('storage/' . $company->logo) }}" width="150" height="100" alt="{{ $company->name }} logo" class="rounded my-2"></td>
              <td>{{ $company->email }}</td>
              <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
              <td>

                @admin
                <div>
                  <a href="{{ route('companies.edit', $company) }}" class="btn btn-info mb-2">Edit</a>
                  <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
            
                  <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('This will delete all employees associated with this company, continue?')">Delete</button>
                  </form>
                </div>
                @endadmin
              </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card my-3">
    <div class="card-header">
      <h2 class="m-0">Employees</h2>
    </div>
    <div class="table-responsive">
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
          @forelse ($company->employees as $employee)
            <tr class="align-middle">
                <td><img src="https://i.pravatar.cc/60?u={{ $employee->email }}" alt="Avatar" width="60" height="60" class="rounded-circle"></td>
                <td>{{ "$employee->first_name $employee->last_name" }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->company->name }}</td>
                <td>
                    <a href="/employees/{{ $employee->id }}" class="btn btn-warning mb-2">View</a>

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
            @empty
              <tr>
                  <td colspan="6" class="text-center">
                    This company has no employees.
                  </td>
              </tr>
            @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection