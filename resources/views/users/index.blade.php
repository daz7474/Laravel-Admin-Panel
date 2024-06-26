@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>
    @admin
    <a href="{{ route('users.create') }}" class="btn btn-primary my-4">+ Add New User</a>
    @endadmin

    <form action="{{ route('users.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for a user..." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">
                Search
            </button>
        </div>
    </form>

    @if ($users->isEmpty())
        <p>No users found.</p>
    @else
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        @admin
                        <th>Actions</th>
                        @endadmin
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="align-middle">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            @admin
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-info mb-2">Edit</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline-block;">
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
        {{ $users->appends(request()->query())->links() }}
    @endif
</div>
@endsection