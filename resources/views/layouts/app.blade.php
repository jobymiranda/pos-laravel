<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel POS')</title>
    <style>
        :root { color-scheme: light; font-family: Arial, sans-serif; }
        body { margin: 0; background: #f4f7fb; color: #182230; }
        header { background: #172554; color: white; padding: 1.25rem 8%; }
        header h1 { margin: 0 0 .75rem; font-size: 1.35rem; }
        nav a { color: #dbeafe; margin-right: 1.25rem; text-decoration: none; font-weight: 600; }
        nav a:hover { color: white; text-decoration: underline; }
        main { max-width: 1000px; margin: 2.5rem auto; padding: 0 1.25rem; }
        .card { background: white; border-radius: 12px; padding: 2rem; box-shadow: 0 8px 24px #17255418; }
        h2 { margin-top: 0; color: #172554; }
        table { width: 100%; border-collapse: collapse; margin-top: 1.25rem; }
        th, td { border-bottom: 1px solid #dbe3ef; padding: .85rem; text-align: left; }
        th { background: #eff6ff; color: #172554; }
        footer { text-align: center; color: #64748b; padding: 2rem; }
    </style>
</head>
<body>
    <header>
        <h1>Laravel POS Foundations</h1>
        <nav aria-label="Main navigation">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('customers') }}">Customers</a>
            <a href="{{ route('users') }}">Users</a>
        </nav>
    </header>

    <main>@yield('content')</main>
    <footer>IT0049 Web System Technologies</footer>
</body>
</html>
