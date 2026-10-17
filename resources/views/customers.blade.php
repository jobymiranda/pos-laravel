@extends('layouts.app')

@section('title', 'Customers | Laravel POS')

@section('content')
    <section class="card">
        <h2>Customer Accounts</h2>
        <p>These records are provided by a temporary static PHP array in <code>CustomerController</code>.</p>
        <table>
            <thead>
                <tr><th>ID</th><th>Name</th><th>Email</th></tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer['id'] }}</td>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
