@extends('layouts.app')

@section('title', 'About | Laravel POS')

@section('content')
    <section class="card">
        <h2>About This Application</h2>
        <p><strong>Course:</strong> {{ $course }}</p>
        <p><strong>Module:</strong> {{ $module }}</p>
        <p>This application demonstrates Laravel routes, controllers, Blade views, and temporary static data arrays.</p>
    </section>
@endsection
