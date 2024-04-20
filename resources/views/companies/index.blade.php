@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Companies</h1>
    <a href="{{ route('companies.create') }}" class="btn btn-primary my-4">+ Add New Company</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr class="align-middle">
                <td><a href="{{ route('companies.show', $company) }}">{{ $company->name }}</a></td>
                <td>{{ $company->email }}</td>
                <td>
                    <img src="{{ asset('storage/' . $company->logo) }}" width="100" height="60" alt="Company Logo" class="rounded my-2">
                </td>
                <td>
                    <a href="{{ route('companies.edit', $company) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" class="btn btn-danger" onclick="return confirm('This will delete all employees associated with this company, continue?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- Pagination links --}}
    <div class="pagination">
        {!! $companies->links() !!}
    </div>
</div>
@endsection