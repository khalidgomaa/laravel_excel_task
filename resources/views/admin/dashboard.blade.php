@extends('layout')

@section('content')

    <div class="container mt-4">
        <h2>User List</h2>

        <!-- Display User Data -->
        <table class="table">
            <thead class="thead-light">
                <tr>
              
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
          
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Display Pagination Links -->
        <div class="d-flex justify-content-center small-pagination-icon">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </div>
    
@endsection
