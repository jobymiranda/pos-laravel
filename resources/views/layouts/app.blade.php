<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#111111">
    <title>@yield('title', 'Laravel POS')</title>
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}">
</head>
<body>
    <div class="app-shell">
        <div class="sidebar-scrim" data-sidebar-close></div>
        <aside class="sidebar" id="appSidebar">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark" aria-hidden="true"><i></i><i></i><i></i></span>
                <span><strong>POSFORMA</strong><small>Laravel point of sale</small></span>
            </a>
            <nav class="sidebar-nav" aria-label="Primary navigation">
                <p class="nav-label">Workspace</p>
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><span class="nav-icon">◆</span>Overview</a>
                <a class="{{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}"><span class="nav-icon">●</span>Customer accounts</a>
                <a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}"><span class="nav-icon">▲</span>User accounts</a>
                <p class="nav-label">Reference</p>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}"><span class="nav-icon">?</span>About the build</a>
            </nav>
            <div class="sidebar-note"><span>IT0049</span><strong>Form follows function.</strong><small>Laravel Foundations · TFA5</small></div>
        </aside>

        <div class="main-shell">
            <header class="topbar">
                <button class="menu-button" type="button" data-sidebar-open aria-label="Open menu"><span></span><span></span></button>
                <div><p>{{ now()->format('l, F j') }}</p><strong>@yield('eyebrow', 'Laravel POS Foundations')</strong></div>
                <a class="topbar-action" href="{{ route('customers') }}"><span>＋</span> Browse accounts</a>
            </header>
            <main class="content">@yield('content')</main>
            <footer class="site-footer"><span>IT0049 · Web System Technologies</span><span>Laravel POS Foundations</span></footer>
        </div>
    </div>
    <script src="{{ asset('js/pos.js') }}" defer></script>
</body>
</html>
