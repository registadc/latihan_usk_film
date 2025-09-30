<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list_film</title>
    <style>
    body {
      margin: 0;
      padding: 20px;
      background-color: #e4c7f2ff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
      font-size: 1.8rem
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 25px;
    }

    .card {
      /* background-color: #d0afdaff; */
      background-color: white;
      padding: 25px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      text-align: center;
      width: 280px;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-8px);
    }

    .card img{
        width: 200px;
        height: 200px;
        border-radius: 10px;
        margin-bottom: 15px;
        object-fit: cover;
    }

    .card h3 {
      margin: 10px 0 5px;
      color: #333;
    }

    .card p {
      font-size: 14px;
      margin: 5px 0;
      color: #444;
    }
    </style>

</head>
<body>
    <h2>List Film</h2>
    <div class="card-container">
        <div class="card">
            <img src="img/bila esok ibu tiada.jpeg">
            <h3>Bila Esok Ibu Tiada</h3>
            <p><b>Genre : </b> Family</p>
            <p><b>Tahun Terbit : </b> 2024</p>
            <p><b>Siopsis : </b> Film ini diangkat dari novel laris dan mengisahkan sebuah keluarga yang kehilangan sosok kepala keluarga, Pak Haro.Film ini menggambarkan perjuangan seorang ibu yang ditinggal pasangannya dalam membesarkan anak-anak, sekaligus dinamika hubungan kakak beradik yang penuh pertengkaran.</p>
            <p><b>Durasi : </b> 104 menit</p>
            <p><b>Aktor : </b> Christine Hakim, Adinia Wirasti, Fedi Nuril</p>
            <h2>★★★★★</h2>
        </div>

        <div class="card">
            <img src="img/komang.jpg">
            <h3>Komang</h3>
            <p><b>Genre : </b> Romance</p>
            <p><b>Tahun Terbit : </b> 2025</p>
            <p><b>Siopsis : </b> Film ini menceritakan perjalanan cinta antara Ode (diperankan oleh Kiesha Alvaro), seorang pemuda asal Buton, dengan Ade (diperankan oleh Aurora Ribero), seorang perantau dari Bali.</p>
            <p><b>Durasi : </b> 107 menit</p>
            <p><b>Aktor : </b> Kiesha Alvaro, Aurora Ribero, Adzando Davema</p>
            <h2>★★★★★</h2>
        </div>

        <div class="card">
            <img src="img/satu kakak.jpeg">
            <h3>1 Kakak 7 Ponakan</h3>
            <p><b>Genre : </b> Family</p>
            <p><b>Tahun Terbit : </b> 2025</p>
            <p><b>Siopsis : </b> Seorang arsitek muda bernama Hendarmoko alias Moko (Chicco Kurniawan) sedang mengejar mimpinya. Namun, rencana hidupnya berubah drastis setelah kakak-kakaknya meninggal dunia secara mendadak.</p>
            <p><b>Durasi : </b> 131 menit</p>
            <p><b>Aktor : </b> Chicco Kurniawan, Amanda Rawles, Maudy Koesnaedi</p>
            <h2>★★★★★</h2>
        </div>
    </div>
    
</body>
</html>