@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Companies</h1>
    @admin
    <a href="{{ route('companies.create') }}" class="btn btn-primary my-4">+ Add New Company</a>
    @endadmin
    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                <tr class="align-middle">
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                    <td>
                        <img src="{{ asset('storage/' . $company->logo) }}" width="100" height="60" alt="Company Logo" class="rounded my-2">
                    </td>
                    <td>
                        <a href="{{ route('companies.show', $company) }}" class="btn btn-warning mb-2">View</a>

                        @admin
                            <a href="{{ route('companies.edit', $company) }}" class="btn btn-info mb-2">Edit</a>
                            <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger" onclick="return confirm('This will delete all employees associated with this company, continue?')">Delete</button>
                            </form>
                        @endadmin
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{-- Pagination links --}}
    <div class="pagination">
        {!! $companies->links() !!}
    </div>
</div>
@endsection