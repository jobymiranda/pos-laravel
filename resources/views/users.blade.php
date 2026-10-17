@extends('layouts.app')

@section('title', 'Users | Laravel POS')

@section('content')
    <section class="card">
        <h2>User Accounts</h2>
        <p>These records are provided by a temporary static PHP array in <code>UserController</code>.</p>
        <table>
            <thead>
                <tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th></tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['role'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
