<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
</head>
<body>
    <header>
        <h1>Admin Dashboard Header</h1>
        <nav>
            <a href="{{ route('admin.logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </nav>
    </header>

    <aside>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        </ul>
    </aside>

    <main>
        @yield('content')
    </main>

    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>