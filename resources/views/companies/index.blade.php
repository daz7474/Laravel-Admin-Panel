@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Companies</h1>
    
    @admin
    <a href="{{ route('companies.create') }}" class="btn btn-primary my-4">+ Add New Company</a>
    @endadmin

    <form action="{{ route('companies.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for a company..." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">
                Search
            </button>
        </div>
    </form>

    @if ($companies->isEmpty())
        <p>No companies found.</p>
    @else
        <div class="table-responsive">
            <table class="table">
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
                        <td>
                            <a href="{{ Str::startsWith($company->website, ['http://', 'https://']) ? $company->website : 'http://' . $company->website }}" target="_blank">
                                {{ $company->website }}
                            </a>
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $company->logo) }}" width="100" height="60" alt="{{ $company->name }} logo" class="rounded my-2">
                        </td>
                        <td>
                            <a href="{{ route('companies.show', $company) }}" class="btn btn-warning mb-2">View</a>

                            @admin
                                <a href="{{ route('companies.edit', $company) }}" class="btn btn-info mb-2">Edit</a>
                                <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('This will delete all employees associated with this company, continue?')">Delete</button>
                                </form>
                            @endadmin
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $companies->appends(request()->query())->links() }}
    @endif
</div>
@endsection