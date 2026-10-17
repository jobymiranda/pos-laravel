@extends('layouts.app')

@section('title', 'Home | Laravel POS')
@section('eyebrow', 'Application overview')

@section('content')
    <section class="hero-bauhaus reveal">
        <div class="hero-copy">
            <p class="kicker light">FIRST LARAVEL APPLICATION</p>
            <h1>Small system.<br><em>Bold structure.</em></h1>
            <p>A focused POS foundation built with Laravel MVC: routes decide, controllers prepare, and Blade views render.</p>
            <div class="button-row"><a class="button button-yellow" href="{{ route('customers') }}">View customers <span>→</span></a><a class="button button-outline-light" href="{{ route('about') }}">Explore the build</a></div>
        </div>
        <div class="hero-sculpture" aria-hidden="true"><span class="sculpture-disc"></span><span class="sculpture-seat"></span><span class="sculpture-leg leg-one"></span><span class="sculpture-leg leg-two"></span><span class="sculpture-orbit"></span></div>
    </section>

    <section class="metric-grid reveal" aria-label="Application summary">
        <article class="metric-card metric-red"><span class="metric-number">04</span><div><strong>Required pages</strong><small>Complete TFA5 surface</small></div><span class="metric-symbol">●</span></article>
        <article class="metric-card metric-blue"><span class="metric-number">10</span><div><strong>Sample records</strong><small>Five customers + five users</small></div><span class="metric-symbol">■</span></article>
        <article class="metric-card metric-yellow"><span class="metric-number">03</span><div><strong>Controllers</strong><small>Separated MVC responsibilities</small></div><span class="metric-symbol">▲</span></article>
        <article class="metric-card metric-green"><span class="metric-number">100%</span><div><strong>Blade navigation</strong><small>Every page is connected</small></div><span class="metric-symbol">◆</span></article>
    </section>

    <section class="dashboard-columns reveal">
        <article class="panel"><div class="panel-heading"><div><p class="kicker">QUICK ACCESS</p><h2>Move through the workspace.</h2></div><span class="live-pill"><i></i> Live locally</span></div><div class="quick-links"><a href="{{ route('customers') }}">Customer accounts <span>↗</span></a><a href="{{ route('users') }}">User accounts <span>↗</span></a><a href="{{ route('about') }}">Architecture notes <span>↗</span></a></div></article>
        <article class="panel panel-dark"><p class="kicker light">MVC MAP</p><h2>Route → Controller → View</h2><p class="muted-light">The same responsibilities you learned in CodeIgniter, translated into Laravel conventions.</p></article>
    </section>
@endsection
