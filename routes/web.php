<?php
use Illuminate\Support\Facades\Route;

// Rute untuk Halaman Utama / Dashboard POS
Route::get('/', function () {
    return '<h1>Selamat Datang di Dashboard POS Toko lontong sayur</h1>';
});

// Rute dengan Parameter Wajib (Melihat detail produk berdasarkan ID)
Route::get('/produk/{id}', function ($id) {
    return 'Menampilkan data produk dengan ID: ' . $id;
});

// Rute dengan Parameter Opsional (Mencari produk berdasarkan nama)
Route::get('/produk/cari/{nama?}', function ($nama = null) {
    if ($nama) {
        return 'Hasil pencarian produk: ' . $nama;
    }
    return 'Silakan masukkan kata kunci pencarian pada URL (contoh: /produk/cari/sabun)';
});


// Group Rute untuk Fitur Admin (Manajemen Data)
Route::prefix('admin')->group(function () {
    Route::get('/produk', function () {
        return 'Halaman Kelola Produk (Hanya Admin)';
    })->name('admin.produk');

    Route::get('/kategori', function () {
        return 'Halaman Kelola Kategori Produk (Hanya Admin)';
    })->name('admin.kategori');
});

// Group Rute untuk Fitur Kasir (Transaksi)
Route::prefix('kasir')->group(function () {
    Route::get('/transaksi', function () {
        return 'Halaman Input Transaksi Penjualan (Kasir)';
    })->name('kasir.transaksi');
});




// 1. Halaman Frontend (Akses utama /)
Route::get('/', function () {
    return '<h1>Halaman Frontend POS Toko</h1><br><a href="/login">Kelompok Tombol ke Halaman Login</a>';
});

// 2. Halaman Login
Route::get('/login', function () {
    return '<h1>Halaman Login Kasir / Admin</h1><br><a href="/admin/dashboard">Klik untuk Masuk ke Admin</a>';
});

// 3. Halaman Admin (Sesuai group prefix)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return '<h1>Halaman Dashboard Admin (Selesai Alur)</h1>';
    });
});





// 1. Halaman Frontend
Route::get('/', function () {
    return view('home');
});

// 2. Halaman Login
Route::get('/login', function () {
    return view('login');
});

// 3. Halaman Admin memanggil Template AdminLTE
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin'); // Memanggil file resources/views/admin.blade.php
    });
});



return view('login');
