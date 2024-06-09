<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contoh Styling Teks</title>
<link rel="stylesheet" href="TEXTSTYLING.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class=container>
    <h1 class="text-center">CONTOH PENGGUNAAN TEXT Styling</h1>

<p>Menggunakan teks <span class="bold-text">tebal</span>.</p>

<p>Menggunakan teks <span class="italic-text">miring</span>.</p>

<p>Menggunakan teks <span class="uppercase-text">kapital</span>.</p>

<p>Menggunakan teks <span class="underline-text">dengan garis bawah</span>.</p>

<p>Mengatur <span class="letter-spacing">jarak huruf</span>.</p>

<p>Mengatur <span class="word-spacing">jarak kata</span>.</p>

<p>Menggunakan teks dengan <span class="text-shadow">bayangan</span>.</p>

<p>Mengatur <span class="small-text">ukuran</span> teks.</p>

<p>Menggunakan teks <span class="subscript-text">subscript</span>.</p>

<p>Menggunakan teks <span class="superscript-text">superscript</span>.</p>
<h1 class="text-center ">KODE ASLI CSS</h1>
<pre>
/* CSS untuk styling teks */
  /* Mengubah warna teks menjadi biru */
   /* Mengubah teks menjadi tebal */
  .bold-text {
    font-weight: bold;
  }

  /* Mengubah teks menjadi miring */
  .italic-text {
    font-style: italic;
  }

  /* Mengubah teks menjadi kapital */
  .uppercase-text {
    text-transform: uppercase;
  }

  /* Menambahkan dekorasi teks garis bawah */
  .underline-text {
    text-decoration: underline;
  }

  /* Mengatur jarak antara huruf */
  .letter-spacing {
    letter-spacing: 2px;
  }

  /* Mengatur jarak antara kata */
  .word-spacing {
    word-spacing: 5px;
  }

  /* Menambahkan bayangan pada teks */
  .text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  }

  /* Mengatur ukuran teks */
  .small-text {
    font-size: 12px;
  }

  /* Mengatur teks menjadi subscript */
  .subscript-text {
    vertical-align: sub;
  }

  /* Mengatur teks menjadi superscript */
  .superscript-text {
    vertical-align: super;
  }
</pre>
<a class="back-button" href="TEXTSTYLING.css" download>DOWNLOAD CSSS</a>
<?php include "../kembali.php" ?>

</body>
</html>
