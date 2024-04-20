@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employees</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary my-4">+ Add New Employee</a>
    <table class="table">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
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
                <td><a href="/companies">{{ $employee->company->name }}</a></td>
                <td>
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
    
    {{-- Pagination links --}}
    <div class="pagination">
      {!! $employees->links() !!}
    </div>
</div>
@endsection