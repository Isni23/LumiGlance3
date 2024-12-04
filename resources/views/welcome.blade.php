
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LumiGlance</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url('{{ asset('assets/images/background.jpg') }}'); /* Gambar latar belakang */
            background-size: cover; /* Agar gambar menutupi seluruh latar belakang */
            background-position: center; /* Agar gambar berada di tengah */
            color: #000; /* Teks hitam */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Memastikan body setidaknya setinggi viewport */
            justify-content: center; /* Memusatkan konten secara vertikal */
            align-items: center; /* Memusatkan konten secara horizontal */
        }
        .container {
            max-width: 400px; /* Lebar maksimum kotak */
            width: 100%; /* Agar kotak responsif */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang dengan transparansi putih */
            border-radius: 10px; /* Sudut membulat */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Bayangan untuk efek kedalaman */
            text-align: center; /* Memusatkan teks di dalam kotak */
        }
        .header h1 {
            font-size: 2rem; /* Ukuran font untuk judul */
            color: #000; /* Teks hitam untuk judul */
            margin: 10px 0; /* Jarak antar elemen */
        }
        .header p {
            font-size: 1rem; /* Ukuran font untuk paragraf */
            color: #000; /* Teks hitam untuk paragraf */
            margin: 10px 0; /* Jarak antar elemen */
        }
        .button {
            background-color: #000; /* Latar belakang tombol hitam */
            color: #fff; /* Teks putih untuk tombol */
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s; /* Efek transisi saat hover */
            display: inline-block; /* Agar tombol memiliki ukuran sesuai konten */
            margin: 10px; /* Jarak antar tombol */
        }
        .button:hover {
            background-color: #444; /* Warna latar belakang tombol saat hover */
        }
        .footer {
            text-align: center; /* Mengatur teks agar berada di tengah */
            margin-top: 20px; /* Memberikan jarak atas */
        
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Selamat Datang di LumiGlance</h1>
            <p>Kaca pintar dengan lampu otomatis dan tombol kontrol! Lampu akan menyala saat mendeteksi gerakan, atau Anda dapat mengaktifkannya sendiri dengan satu sentuhan.</p>
            <a href="{{ route('login') }}" class="button">Masuk</a>
            <a href="{{ route('register') }}" class="button">Daftar</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} LumiGlance. Semua hak dilindungi.</p>
    </div>
</body>
</html>