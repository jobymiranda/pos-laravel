@extends('layouts.app')

@section('title', 'About | Laravel POS')
@section('eyebrow', 'About the build')

@section('content')
    <section class="page-heading reveal"><div><p class="kicker">ABOUT THE SYSTEM</p><h1>Form follows function.</h1><p>This Laravel POS translates the CasaForma midterm’s bold Bauhaus interface into a compact TFA5 foundation.</p></div></section>
    <section class="about-grid">
        <article class="about-card red reveal"><span>01</span><h2>Purpose</h2><p><strong>{{ $course }}</strong><br>{{ $module }}</p></article>
        <article class="about-card blue reveal"><span>02</span><h2>Architecture</h2><p>Routes connect URLs to controllers, controllers prepare page data, and Blade views render the interface.</p></article>
        <article class="about-card yellow reveal"><span>03</span><h2>Data handling</h2><p>Customer and user listings use static PHP arrays, then loop through those records with Blade <code>&#64;foreach</code>.</p></article>
        <article class="about-card green reveal"><span>04</span><h2>Submission ready</h2><p>The project includes migrations, seeders, a README, a generated application key, and a clean local Git commit.</p></article>
    </section>
@endsection
