<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Toko - Beranda</title>
    <!-- Masukkan CSS AdminLTE yang sudah ada di folder public/teamplate -->
    <link rel="stylesheet" href="{{ asset('teamplate/css/adminlte.css') }}">
</head>
<body class="bg-body-secondary d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="text-center p-5 shadow rounded bg-body">
        <h1 class="mb-3 fw-bold text-primary">🛒 SELAMAT DATANG DI POS TOKO</h1>
        <p class="text-muted mb-4">Sistem Kasir & Manajemen Toko Berbasis Laravel & AdminLTE</p>
        
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ url('/login') }}" class="btn btn-primary px-4">Login Kasir / Admin</a>
            <a href="{{ url('/admin/dashboard') }}" class="btn btn-outline-secondary px-4">Lihat Dashboard</a>
        </div>
    </div>
</body>
</html>