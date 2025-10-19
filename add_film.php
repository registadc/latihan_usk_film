<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_film</title>
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

.header-2 {
  width: 100%;
  background-color: #9b0312;
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


  h1{
    text-align: center;
    margin-bottom: 25px;
    font-size: 28px;
    color: #ffffffff;
    font-weight: 600;
  }

.form {
  max-width: 650px;
  margin: auto;
  background-color: rgba(255, 255, 255, 0.1); /* Putih 10% transparan */
  padding: 35px;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
  transition: transform 0.3s ease;
}

.form:hover {
  transform: translateY(-3px);
}

.form label {
  display: block;
  font-weight: bold;
  margin: 12px 0 6px;
  color: #fffefeff;
}

.form input[type="text"],
.form input[type="file"],
.form select {
  width: 100%;
  padding: 10px 5px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 15px;
  margin-bottom: 3px;
  background: #060606ff;
  transition: all 0.3s;
}


.form input[type="text"]:focus,
.form input[type="file"]:focus,
.form select:focus {
  border-color: #b07ac7ff;
  box-shadow: 0 0 6px rgba(227, 172, 255, 0.4);
  background: #fff;
  outline: none;
}


.form input[placeholder^="Aktor"] {
  margin-bottom: 10px;
}


.form button {
  display: block;
  width: 100%;
  padding: 14px;
  color: white;
  font-size: 16px;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  margin-top: 20px;
  transition: background 0.3s ease, transform 0.2s;
  background-color: #9b0312;
}

/* .form button:hover {
  background: linear-gradient(135deg, #1e88e5, #1565c0);
  transform: translateY(-2px);
} */


.rating {
  display: flex;
  gap: 8px;
  margin-top: 8px;
}

.star {
  font-size: 40px;
  color: #d6d6d6;
  cursor: pointer;
  transition: transform 0.2s, color 0.3s;
}

.star:hover {
  transform: scale(1.2);
  color: #ffca28;
}

.star.active {
  color: #ffca28;
}


/* .form select[multiple] {
  height: auto;
  min-height: 120px;
} */

.stars { 
    display: flex; 
    flex-direction: row-reverse; 
    justify-content: flex-end; 
} 
.stars input { 
    display: none; 
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

    <div class="form">
        <h1>Form Tambah Data</h1>
        <form action="">
            <label for="">Judul</label>
            <input type="text" name="judul" id=""><br><br>

           <label>Genre</label> 
            <select name="genre[]" multiple size="5"> 
                <option value="Action">Action</option> 
                <option value="Drama">Drama</option> 
                <option value="Comedy">Comedy</option> 
                <option value="Romance">Romance</option> 
                <option value="Romance">Family</option> 
                <option value="Horror">Horror</option> 
                <option value="Thriller">Thriller</option> 
            </select><br><br>

            <label for="">Tahun Produksi</label>
            <input type="text" name="tahun_produksi" id=""><br><br>

            <label for="">Sinopsis</label>
            <input type="text" name="Sinopsis" id=""><br><br>

            <label for="">Durasi</label>
            <input type="text" name="durasi" id=""><br><br>

            <label for="">Cast/Aktor</label><br>
            <input type="text" name="cast" id="" placeholder="Aktor 1"><br>
            <input type="text" name="cast" id="" placeholder="Aktor 2"><br>
            <input type="text" name="cast" id="" placeholder="Aktor 3"><br>

            <label>Poster</label>
            <input type="file" name="poster" id=""><br>

            <!-- <label>Rating</label> 
            <div class="stars"> 
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">★</label>

                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">★★</label>

                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">★★★</label> 

                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">★★★★</label>
                
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">★★★★★</label>
            </div> -->

            <label>Rating</label> 
            <div class="rating" id="rating"> 
                <span class="star" data-value="1">★</span> 
                <span class="star" data-value="2">★</span> 
                <span class="star" data-value="3">★</span> 
                <span class="star" data-value="4">★</span> 
                <span class="star" data-value="5">★</span> 
            </div>

            <button>Simpan</button>

        </form>
    </div>
</body>
</html>