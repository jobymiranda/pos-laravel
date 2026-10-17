@extends('layouts.app')

@section('title', 'Customers | Laravel POS')
@section('eyebrow', 'Customer accounts')

@section('content')
    <section class="page-heading reveal"><div><p class="kicker">OPERATIONS · CLIENTS</p><h1>Customer accounts</h1><p>Keep the people behind every transaction easy to find.</p></div><span class="count-badge">{{ count($customers) }} records</span></section>
    <section class="toolbar reveal"><label class="search-box"><span>⌕</span><input type="search" placeholder="Search customers" data-search-input="customerTable"></label><span>Temporary static data source</span></section>
    <section class="panel table-panel reveal"><div class="table-wrap"><table id="customerTable"><thead><tr><th>ID</th><th>Customer</th><th>Email</th><th>Status</th></tr></thead><tbody>
        @foreach ($customers as $customer)
            <tr data-search-item="{{ strtolower($customer['name'] . ' ' . $customer['email']) }}"><td><span class="id-pill">{{ str_pad($customer['id'], 2, '0', STR_PAD_LEFT) }}</span></td><td><div class="identity"><span class="initial-avatar">{{ strtoupper(substr($customer['name'], 0, 1)) }}</span><strong>{{ $customer['name'] }}</strong></div></td><td>{{ $customer['email'] }}</td><td><span class="status-pill">Active</span></td></tr>
        @endforeach
    </tbody></table></div></section>
    </section>
@endsection
