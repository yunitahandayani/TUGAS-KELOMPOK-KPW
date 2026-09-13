<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; }
        .navbar { background: #007bff; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        .navbar a { color: white; text-decoration: none; }
        .content { padding: 30px; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 500px; }
        .field { margin-bottom: 12px; }
        .field label { display: block; color: #666; font-size: 13px; }
    </style>
</head>
<body>
    <nav class="navbar">
        <span>Profil Saya</span>
        <a href="{{ route('dashboard') }}">&larr; Kembali ke Dashboard</a>
    </nav>

    <div class="content">
        <div class="card">
            <div class="field">
                <label>Nama</label>
                <div>{{ $user->name }}</div>
            </div>
            <div class="field">
                <label>Email</label>
                <div>{{ $user->email }}</div>
            </div>
            <div class="field">
                <label>Role</label>
                <div>{{ $user->role->name ?? '-' }}</div>
            </div>
        </div>
    </div>
</body>
</html>