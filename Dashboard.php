<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.html">
    <title>PT Bendi Car - Sewa Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #ffc0cb;
        }
        header {
            background: #ffc0cb;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 20px;
        }
        .car-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .car-item {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .car-item h3 {
            margin-top: 0;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: #FFFFFF.;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di PT Bendi Car</h1>
        <img src="mobil.png" alt="Deskripsi Gambar" width="1000" max-width: 1000px; height="auto">
        <nav>
            <a href="login.html">Login</a>
            <a href="logout.html">Logout</a>
            <a href="sewa.html">Sewa Mobil</a>
        </nav>
    </header>
    <main>
        <h2>Daftar Mobil yang Tersedia untuk Disewa</h2>
        <div class="car-list">
            <div class="car-item">
                <h3>Toyota Avanza</h3>
                <p>Harga: Rp 300.000/hari</p>
                <p>Deskripsi: Mobil keluarga yang nyaman dan irit bahan bakar.</p>
                <button onclick="sewaMobil('Toyota Avanza')">Sewa Sekarang</button>
            </div>
            <div class="car-item">
                <h3>Honda Jazz</h3>
                <p>Harga: Rp 350.000/hari</p>
                <p>Deskripsi: Mobil hatchback yang sporty dan efisien.</p>
                <button onclick="sewaMobil('Honda Jazz')">Sewa Sekarang</button>
            </div>
            <div class="car-item">
                <h3>Suzuki Ertiga</h3>
                <p>Harga: Rp 320.000/hari</p>
                <p>Deskripsi: Mobil MPV yang luas dan cocok untuk keluarga.</p>
                <button onclick="sewaMobil('Suzuki Ertiga')">Sewa Sekarang</button>
            </div>
            <div class="car-item">
                <h3>Mitsubishi Xpander</h3>
                <p>Harga: Rp 400.000/hari</p>
                <p>Deskripsi: Mobil SUV yang stylish dan nyaman.</p>
                <button onclick="sewaMobil('Mitsubishi Xpander')">Sewa Sekarang</button>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 PT Bendi Car. Semua Hak Dilindungi.</p>
    </footer>

    <script>
        function sewaMobil(mobil) {
            alert('Anda telah memilih untuk menyewa ' + mobil + '. Silakan lanjutkan ke proses pembayaran.');
            // Di sini Anda bisa menambahkan logika untuk melanjutkan ke halaman pembayaran
        }
    </script>
</body>
</html>