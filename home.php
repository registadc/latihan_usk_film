<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list_film</title>
    <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
  background-color: #000;
  color: #fff;
  line-height: 1.6;
  padding: 20px;
  margin-top: 60px;
}

/* Header */
.header-2 {
  width: 100%;
  background-color: #464646ff;
  padding: 12px 24px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
}

.header-2 .flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1000px;
  margin: auto;
}

.navbar {
  display: flex;
  gap: 18px;
}

.navbar a {
  text-decoration: none;
  color: #fff;
  font-weight: 500;
  padding: 6px 12px;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.navbar a:hover {
  background-color: #fff;
  color: #9b0312;
}

.judul {
  font-size: 18px;
  font-weight: 600;
  color: #fbbf24;
  pointer-events: none;
  cursor: default;
  text-decoration: none;
}


h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #fff;
  font-size: 1.8rem;
}


.card-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  gap: 15px;
  justify-items: center;
}


.card {
  background-color: #111;
  text-align: center;
  border-radius: 6px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
}

.card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-bottom: 2px solid #9b0312;
}

.card h3 {
  margin: 8px 0 4px;
  color: #fff;
  font-size: 14px;
}

.card .bintang {
  color: #fbbf24;
  font-size: 14px;
  margin-bottom: 8px;
}

.btn-detail {
  display: inline-block;
  padding: 6px 12px;
  background-color: #9b0312;
  color: #fff;
  text-decoration: none;
  font-size: 12px;
  border-radius: 4px;
  margin-bottom: 8px;
  transition: background-color 0.3s ease;
}

.btn-detail:hover {
  background-color: #c70418;
}
    </style>

</head>
<body>

<div class="header-2">
      <div class="flex">
        <a href="kartu.php" class="judul">Manajemen Bioskop</a>
          <nav class="navbar">
              <a href="home.php">Home</a>
              <a href="tambah_data.php">Tambah Data</a>
              <a href="daftar.php">Daftar Film</a>
          </nav>
      </div>
  </div>

    <h2>List Film</h2>
    <div class="card-container">
        <div class="card">
            <img src="img/bila esok ibu tiada.jpeg">
            <h3>Bila Esok Ibu Tiada</h3>
            <h2 class="bintang">★★★★★</h2>
            <a href="detail.php" class="btn-detail">Detail</a>
        </div>

        <div class="card">
            <img src="img/komang.jpg">
            <h3>Komang</h3>
            <h2 class="bintang">★★★★★</h2>
            <a href="detail.php" class="btn-detail">Detail</a>
        </div>

        <div class="card">
            <img src="img/satu kakak.jpeg">
            <h3>1 Kakak 7 Ponakan</h3>
            <h2 class="bintang">★★★★★</h2>
            <a href="detail.php" class="btn-detail">Detail</a>
        </div>
    </div>
    
</body>
</html>