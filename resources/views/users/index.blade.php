@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>
    @admin
    <a href="{{ route('users.create') }}" class="btn btn-primary my-4">+ Add New User</a>
    @endadmin
    <table class="table text-center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="align-middle">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="/users/{{ $user->id }}" class="btn btn-warning">View</a>

                    @admin
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('This action is permanent. Are you sure?')">Delete</button>
                    </form>
                    @endadmin
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- Pagination links --}}
    <div class="pagination">
      {!! $users->links() !!}
    </div>
</div>
@endsection