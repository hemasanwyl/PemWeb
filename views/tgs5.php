<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Bioskop</title>
</head>
<body>
    <style>
        body{
            font-family: serif;
            background: url(https://img.freepik.com/free-vector/cinema-stage-background-with-clapperboard-popcorn-chairs_1017-38722.jpg?semt=ais_hybrid&w=740&q=80);
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        .container{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background: white;
            width: 250px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card :hover{
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .content{
            padding: 15px;
        }

        .content h2{
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .content p{
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
    </style>

    <h1>🎬DAFTAR FILM</h1>

    <div class="container">


        <div class="card">
            <img src="https://blog.amikom.ac.id/wp-content/uploads/2025/12/Sinopsis-Film-Ghost-in-The-Cell-Lengkap-Dengan-Jadwal-Tayang-Pemain-dan-Trailernya.jpg" alt="ghost in the sell">
            <div class="content">
                <h2>Ghost In the Cell</h2>
                <p>Horor, Action</p>
                <p>Tahun 2026</p>
                <p class="rating">⭐️⭐️⭐️⭐️⭐️ (4.0)</p>
            </div>
        </div>

        <div class="card">
            <img src="https://i.pinimg.com/736x/d7/0c/42/d70c42515a3747e99419a5654985ac22.jpg" alt="doraemon">
            <div class="content">
                <h2>Stand By Me</h2>
                <p>Komedi</p>
                <p>Tahun 2014</p>
                <p class="rating">⭐️⭐️⭐️⭐️⭐️ (3.7)</p>
            </div>
        </div>

        <div class="card">
            <img src="https://i.pinimg.com/736x/49/01/70/49017053877d7de5517dbd8019d2fdaa.jpg" alt="jumbo">
            <div class="content">
                <h2>Jumbo</h2>
                <p>Fantasi, Petualangan</p>
                <p>Tahun 2025</p>
                <p class="rating">⭐️⭐️⭐️⭐️⭐️ (4.5)</p>
            </div>
        </div>

        <div class="card">
            <img src="https://i.pinimg.com/736x/0a/9f/04/0a9f045d365a2c19431f3a2eef0b9f31.jpg" alt="inside out">
            <div class="content">
                <h2>Inside Out 2</h2>
                <p>Animasi</p>
                <p>Tahun 2024</p>
                <p class="rating">⭐️⭐️⭐️⭐️⭐️ (4.5)</p>
            </div>
        </div>

        <div class="card">
            <img src="https://i.pinimg.com/736x/41/49/ad/4149adea4f63b82db29091250e6e4f9a.jpg" alt="kkn desa">
            <div class="content">
                <h2>KKN di Desa Penari</h2>
                <p>Horor, Misteri</p>
                <p>Tahun 2022</p>
                <p class="rating">⭐️⭐️⭐️⭐️⭐️ (3.3)</p>
            </div>
        </div>
    </div>
</body>
</html>