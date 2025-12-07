<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - AI Directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e); /* Warna gelap futuristik */
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            background: -webkit-linear-gradient(#00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-desc {
            font-size: 1.2rem;
            color: #d1d1d1;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .btn-start {
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            background: #00c6ff;
            border: none;
            color: #0f0c29;
            font-weight: bold;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-start:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 198, 255, 0.6);
            color: #0f0c29;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="mb-4">
            <span style="font-size: 80px;">🤖</span>
        </div>

        <h1 class="hero-title">AI Tools Directory</h1>
        
        <p class="hero-desc">
            Temukan, simpan, dan kelola berbagai alat Kecerdasan Buatan (AI) terbaik untuk menunjang produktivitasmu dalam satu tempat.
        </p>

        <a href="{{ route('tools.index') }}" class="btn btn-start">
            Mulai Sekarang 🚀
        </a>

        <div class="mt-5 text-white-50 small">
            &copy; Aurel Ariella Anjani & Saphira Aldyna Masik
        </div>
    </div>

</body>
</html>
