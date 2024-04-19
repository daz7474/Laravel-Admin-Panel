@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Companies</h1>
    <a href="{{ route('companies.create') }}" class="btn btn-primary my-4">Add New Company</a>
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
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>
                    <img src="{{ asset('storage/'.$company->logo) }}" width="100" alt="Company Logo">
                </td>
                <td>
                    <a href="{{ route('companies.edit', $company) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
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
        {!! $companies->links() !!}
    </div>
</div>
@endsection