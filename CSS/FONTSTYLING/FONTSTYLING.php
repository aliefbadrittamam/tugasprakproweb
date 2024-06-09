<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="FONTSTYLING.css">

<title>Contoh Styling Font</title>

</head>
<body>
<h1 class="judulutama">CONTOH PENGGUNAAN FONTSTYLING</h1>

<h1>Judul Utama (Warna Merah)</h1>

<p>Paragraf dengan font Arial.</p>

<h2>Sub Judul (Ukuran 20px)</h2>

<h3>Teks Tebal</h3>

<h4>Teks Miring</h4>

<h5>Font Times New Roman (Ukuran 18px, Tebal)</h5>

<h6>Teks Kapital</h6>

<p><a href="#">Tautan dengan garis bawah</a></p>

<p><a href="#">Tautan dengan teks miring saat dihover</a></p>

<p><span>Spasi antar huruf</span></p>

<div>Spasi antar kata</div>

<p><em>Teks tebal dan miring</em></p>

<p><strong><em>Teks tebal, miring, dan berwarna biru</em></strong></p>
<h1>Kode CSS</h1>
<pre style="font-size: xx-large;">


/* CSS untuk styling font */
  /* Mengubah warna teks menjadi merah */
  body {
    color: red;
  }

  /* Mengubah jenis font menjadi Arial dan fallback ke sans-serif */
  .judulutama{
    font-size: xx-large;
    color: black;
    text-align: center;
  }
  h1, p {
    font-family: Arial, sans-serif;
  }

  /* Mengubah ukuran font menjadi 20px */
  h2 {
    font-size: 20px;
  }

  /* Mengubah tebal font menjadi bold */
  h3 {
    font-weight: bold;
  }

  /* Mengubah gaya font menjadi italic */
  h4 {
    font-style: italic;
  }

  /* Mengubah tebal, ukuran, dan jenis font */
  h5 {
    font-weight: bold;
    font-size: 18px;
    font-family: "Times New Roman", Times, serif;
  }

  /* Mengubah teks menjadi kapital */
  h6 {
    text-transform: uppercase;
  }

  /* Menambahkan dekorasi teks garis bawah */
  a {
    text-decoration: underline;
  }

  /* Mengatur teks menjadi miring saat dihover */
  a:hover {
    font-style: italic;
  }

  /* Menyesuaikan spasi antar huruf */
  span {
    letter-spacing: 2px;
  }

  /* Menyesuaikan spasi antar kata */
  div {
    word-spacing: 5px;
  }

  /* Mengatur teks menjadi tebal dan miring */
  em {
    font-weight: bold;
    font-style: italic;
  }

  /* Mengatur teks menjadi tebal dan miring saat berada di dalam elemen strong */
  strong em {
    color: blue; /* Menambahkan warna untuk teks yang tebal dan miring */
  }
  </pre>
  <a class="back-button" href="FONTSTYLING.css" download>DOWNLOAD CSSS</a>
  <?php include "../kembali.php" ?>

</pre>

</body>

</html>
