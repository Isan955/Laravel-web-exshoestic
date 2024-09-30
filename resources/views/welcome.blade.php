<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exotic | Bersih dan Terawat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #232323;
            color: #333;
        }
        header {
            background-color: #009688;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 80vh;
            background-image: url('TokoSepatu.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .hero h1 {
            font-size: 4rem;
            margin: 0;
        }
        .hero p {
            font-size: 1.5rem;
            margin: 10px 0;
        }
        .cta-button {
            background-color: #fff;
            color: #009688;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 5px;
            margin-top: 20px;
        }
        .services {
            display: flex;
            justify-content: space-around;
            margin: 50px 0;
        }
        .service-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .service-item h3 {
            color: #009688;
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #009688;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Exotic Shoe wash</h1>
    </header>

    <div class="hero">
        <h1>Bersihkan Sepatu Anda di Sini!</h1>
        <p>Cepat, Profesional, dan Terpercaya</p>
        <a href="#services" class="cta-button">Lihat Layanan Kami</a>
    </div>

    <div id="services" class="services">
        <div class="service-item">
            <h3>Cuci Sepatu Standar</h3>
            <p>Layanan pembersihan dasar untuk sepatu kesayangan Anda.</p>
        </div>
        <div class="service-item">
            <h3>Cuci Sepatu Premium</h3>
            <p>Pembersihan mendalam untuk sepatu mewah Anda.</p>
        </div>
        <div class="service-item">
            <h3>Perawatan dan Polishing</h3>
            <p>Perawatan tambahan untuk menjaga sepatu tetap seperti baru.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Exotic shoe wash. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>