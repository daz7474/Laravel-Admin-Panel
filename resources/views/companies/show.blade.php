@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-6">
      <img src="{{ asset('storage/' . $company->logo) }}" width="500" height="100" alt="Company Logo" class="rounded my-2">
    </div>

    <div class="col-6">
      <h1>{{ $company->name }}</h1>
      <p>{{ $company->email }}</p>

      <div>
        <a href="{{ route('companies.edit', $company) }}" class="btn btn-info">Edit</a>
        <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger" onclick="return confirm('This will delete all employees associated with this company, continue?')">Delete</button>
        </form>
      </div>
    </div>

    <div class="my-3">
      <h2>Employees</h2>
      <ul class="list-group">
        @foreach ($company->employees as $employee)
          <li class="list-group-item">
            <a href="/employees/{{ $employee->id }}">
              {{ "$employee->first_name $employee->last_name" }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection