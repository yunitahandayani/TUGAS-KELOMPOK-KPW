<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; }
        .navbar { background: #007bff; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        .navbar a, .navbar button { color: white; text-decoration: none; background: none; border: 1px solid white; padding: 6px 14px; border-radius: 4px; cursor: pointer; }
        .content { padding: 30px; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 500px; }
    </style>
</head>
<body>
    <nav class="navbar">
        <span>Dashboard</span>
        <div>
            <a href="{{ route('profile') }}">Profil</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit">Keluar</button>
            </form>
        </div>
    </nav>

    <div class="content">
        <div class="card">
            <h2>Selamat datang, {{ auth()->user()->name }}!</h2>
            <p>Email: {{ auth()->user()->email }}</p>
        </div>
    </div>
</body>
</html>