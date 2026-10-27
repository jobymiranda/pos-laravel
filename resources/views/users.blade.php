@extends('layouts.app')

@section('title', 'Users | Laravel POS')
@section('eyebrow', 'User accounts')

@section('content')
    <section class="page-heading reveal"><div><p class="kicker">OPERATIONS · STUDIO TEAM</p><h1>User accounts</h1><p>See the people and roles that keep the POS workspace moving.</p></div><span class="count-badge">{{ count($users) }} records</span></section>
    <section class="toolbar reveal"><label class="search-box"><span>⌕</span><input type="search" placeholder="Search users" data-search-input="userTable"></label><span>Eloquent database records</span></section>
    <section class="panel table-panel reveal"><div class="table-wrap"><table id="userTable"><thead><tr><th>ID</th><th>Full name</th><th>Username</th></tr></thead><tbody>
        @foreach ($users as $user)
            <tr data-search-item="{{ strtolower($user->username . ' ' . $user->full_name) }}"><td><span class="id-pill">{{ str_pad($user->id, 2, '0', STR_PAD_LEFT) }}</span></td><td><div class="identity"><span class="initial-avatar">{{ strtoupper(substr($user->full_name, 0, 1)) }}</span><strong>{{ $user->full_name }}</strong></div></td><td><span class="role-pill">{{ $user->username }}</span></td></tr>
        @endforeach
    </tbody></table></div></section>
    </section>
@endsection
