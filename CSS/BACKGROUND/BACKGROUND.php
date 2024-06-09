<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTOH PENGGUNAAN BACKGROUND PADA CSS</title>
    <link rel="stylesheet" href="BACKGROUND.css">
</head>
<body>
    <h1>CONTOH PENGGUNAAN BACKGROUND PADA CSS</h1>
<h2><br>BACKGROUND DENGAN WARNA</h2>
    <section class="background-color"></section>
    <h2><br>BACKGROUND DENGAN GAMBAR</h2>
    <section class="background-image"></section>
    <h2><br>BACKGROUND DENGAN GRADASI WARNA/GRADIENT</h2>
    <section class="background-gradient"></section>
    <h2><br>BACKGROUND DENGAN CAMPURAN</h2>
    <section class="background-mixed"></section>
    <h2><br>BACKGROUND DENGAN WARNA GRADASI LINEAR</h2>
    <section class="background-linear-gradient"></section>
    <pre>
    /* CSS untuk background */
/* Mengatur latar belakang dengan warna solid */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
h1 {
    text-align: center;
    margin-top: 50px;
}
section {
    height: 200px;
    margin: 20px;
}
/*  */
.background-color {
    background-color: #b4c330;
  }
  
  /* Mengatur latar belakang dengan gambar */
  .background-image {
    background-image: url('../../HTML/img/uniralandscape.jpg');
    height: 290px; /* Tetapkan tinggi sesuai kebutuhan */
    background-repeat: no-repeat; /* Mencegah pengulangan gambar */
    background-size: cover; /* Mengatur gambar latar belakang untuk menutupi seluruh area dengan mempertahankan aspek rasio */
  }
  
  /* Mengatur latar belakang dengan gradient */
  .background-gradient {
    background-image: linear-gradient(to right, #ff7e5f, #feb47b); /* Gradient horizontal dari kiri ke kanan */
  }
  
  /* Mengatur latar belakang dengan gambar dan warna */
  .background-mixed {
    background-image: url('gambar.jpg'), linear-gradient(to bottom, #92fe9d, #00c9ff); /* Kombinasi gambar dan gradient */
    background-size: cover, auto; /* Mengatur ukuran gambar dan gradient */
    background-repeat: no-repeat, no-repeat; /* Mencegah pengulangan gambar dan gradient */
    background-position: center, center; /* Posisi gambar dan gradient di tengah */
  }
  
  /* Mengatur latar belakang dengan variasi linear gradient */
  .background-linear-gradient {
    background-image: linear-gradient(to right, #ff0000 0%, #ff9900 50%, #ffff00 100%); /* Gradient horizontal dengan warna variasi */
  }
  
  
    </pre>
    <a class="back-button" href="BACKGROUND.css" download>DOWNLOAD CSS</a>
    <?php include "../kembali.php" ?>
</body>
</html>
