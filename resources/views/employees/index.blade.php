@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employees</h1>
    @admin
    <a href="{{ route('employees.create') }}" class="btn btn-primary my-4">+ Add New Employee</a>
    @endadmin

    <form action="{{ route('employees.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for a employee..." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">
                Search
            </button>
        </div>
    </form>

    @if ($employees->isEmpty())
        <p>No employees found.</p>
    @else
        <div class="table-responsive">
            <table class="table">
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
                    @foreach ($employees as $employee)
                    <tr class="align-middle">
                        <td><img src="https://i.pravatar.cc/60?u={{ $employee->email }}" alt="Avatar" width="60" height="60" class="rounded-circle"></td>
                        <td>{{ "$employee->first_name $employee->last_name" }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td><a href="{{ route('companies.show', $employee->company->id) }}">{{ $employee->company->name }}</a></td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $employees->appends(request()->query())->links() }}
    @endif
</div>
@endsection