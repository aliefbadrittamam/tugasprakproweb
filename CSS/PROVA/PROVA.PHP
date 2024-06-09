<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contoh Halaman Web</title>
<link rel="stylesheet" href="PROVA.css"> 
</head>
<body>
<h1>BEBERAPA STYLE CSS PROPERTI VALUE YANG SAYA KUASAI</h1>
<h1>Judul Utama</h1>

<p>Ini adalah sebuah contoh paragraf. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod felis a libero tincidunt, nec volutpat ligula finibus. Integer dapibus posuere libero, nec facilisis nulla vestibulum vel. Curabitur auctor velit et dolor lacinia, vitae ultrices magna cursus. Nam eu ex eu libero vehicula suscipit vel a felis. Integer gravida eros et erat feugiat, sit amet dictum sapien lacinia. Duis nec lorem lorem.</p>

<img src="../../HTML/img/gambar.png" alt="Contoh Gambar">

<ul>
  <li>Unira 1</li>
  <li>Unira 2</li>
  <li>Unira 3</li>
</ul>

<blockquote>
  Ini adalah kutipan dari sumber yang terkenal seperti footnote.
</blockquote>

<table>
  <tr>
    <th>Nama</th>
    <th>Usia</th>
  </tr>
  <tr>
    <td>ALIEF</td>
    <td>19</td>
  </tr>
  <tr>
    <td>BADRIT</td>
    <td>19</td>
  </tr>
</table>

<form>
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="submit" value="Submit">
</form>

<footer>
  &copy; ALIEF BADRIT TAMAM
</footer>

<h1>Kode Asli</h1>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;title&gt;Contoh Halaman Web&lt;/title&gt;
&lt;link rel="stylesheet" href="PROVA.css"&gt; 
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;Judul Utama&lt;/h1&gt;

&lt;p&gt;Ini adalah sebuah contoh paragraf. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam euismod felis a libero tincidunt, nec volutpat ligula finibus. Integer dapibus posuere libero, nec facilisis nulla vestibulum vel. Curabitur auctor velit et dolor lacinia, vitae ultrices magna cursus. Nam eu ex eu libero vehicula suscipit vel a felis. Integer gravida eros et erat feugiat, sit amet dictum sapien lacinia. Duis nec lorem lorem.&lt;/p&gt;

&lt;img src="../../HTML/img/gambar.png" alt="Contoh Gambar"&gt;

&lt;ul&gt;
  &lt;li&gt;Unira 1&lt;/li&gt;
  &lt;li&gt;Unira 2&lt;/li&gt;
  &lt;li&gt;Unira 3&lt;/li&gt;
&lt;/ul&gt;

&lt;blockquote&gt;
  Ini adalah kutipan dari sumber yang terkenal seperti footnote.
&lt;/blockquote&gt;

&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Nama&lt;/th&gt;
    &lt;th&gt;Usia&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;ALIEF&lt;/td&gt;
    &lt;td&gt;19&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;BADRIT&lt;/td&gt;
    &lt;td&gt;19&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;

&lt;form&gt;
  &lt;label for="nama"&gt;Nama:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="nama" name="nama"&gt;&lt;br&gt;
  &lt;label for="email"&gt;Email:&lt;/label&gt;&lt;br&gt;
  &lt;input type="email" id="email" name="email"&gt;&lt;br&gt;
  &lt;label for="password"&gt;Password:&lt;/label&gt;&lt;br&gt;
  &lt;input type="password" id="password" name="password"&gt;&lt;br&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

&lt;footer&gt;
  &copy; ALIEF BADRIT TAMAM
&lt;/footer&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
<h1>Kode CSS</h1>
<pre style="font-size: xx-large;">


/* Style untuk elemen judul utama */
h1 {
    color: #0d73e0; /* Warna teks */
    font-family: "Arial", sans-serif; /* Jenis font */
    font-size: 36px; /* Ukuran font */
    font-weight: bold; /* Ketebalan font */
    text-align: center; /* Penataan teks */
    margin-top: 20px; /* Margin atas */
    margin-bottom: 20px; /* Margin bawah */
  }
  
  /* Style untuk elemen paragraf */
  p {
    color: #e91818; /* Warna teks */
    font-family: "Arial", sans-serif; /* Jenis font */
    font-size: 16x; /* Ukuran font */
    line-height: 1.5; /* Tinggi baris */
    margin-bottom: 20px; /* Margin bawah */
  }
  
  /* Style untuk elemen gambar */
  img {
    display: block; /* Cara elemen ditampilkan */
    margin: 0 auto; /* Margin secara otomatis ke kiri dan kanan (menengahkan gambar) */
    max-width: 300px; /* Lebar maksimum gambar */
    height: auto; /* Menghindari distorsi gambar */
  }
  
  /* Style untuk elemen link */
  a {
    color: #007bff; /* Warna teks */
    text-decoration: none; /* Dekorasi teks */
  }
  
  /* Style untuk elemen link saat dihover */
  a:hover {
    text-decoration: underline; /* Dekorasi teks saat dihover */
  }
  
  /* Style untuk elemen daftar tak terurut */
  ul {
    list-style-type: disc; /* Jenis marker */
    margin-bottom: 20px; /* Margin bawah */
  }
  
  /* Style untuk elemen daftar terurut */
  ol {
    list-style-type: decimal; /* Jenis nomor urut */
    margin-bottom: 20px; /* Margin bawah */
  }
  
  /* Style untuk elemen daftar dalam daftar */
  li {
    margin-bottom: 5px; /* Margin bawah */
  }
  
  /* Style untuk elemen kotak teks */
  blockquote {
    font-style: italic; /* Gaya font */
    border-left: 5px solid #ccc; /* Border kiri */
    padding-left: 10px; /* Padding kiri */
    margin-left: 0; /* Margin kiri */
  }
  
  /* Style untuk elemen tabel */
  table {
    width: 100%; /* Lebar tabel */
    border-collapse: collapse; /* Menggabungkan batas sel */
  }
  
  /* Style untuk sel dalam tabel */
  td, th {
    border: 1px solid #ddd; /* Border sel */
    padding: 8px; /* Padding sel */
    text-align: left; /* Penataan teks */
  }
  
  /* Style untuk sel header dalam tabel */
  th {
    background-color: #f2f2f2; /* Warna latar belakang */
  }
  
  /* Style untuk formulir */
  form {
    margin-bottom: 20px; /* Margin bawah */
  }
  
  /* Style untuk input dalam formulir */
  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%; /* Lebar input */
    padding: 10px; /* Padding input */
    margin-bottom: 10px; /* Margin bawah */
    border: 1px solid #ccc; /* Border input */
    border-radius: 5px; /* Border radius */
  }
  
  /* Style untuk tombol dalam formulir */
  input[type="submit"] {
    background-color: #007bff; /* Warna latar belakang */
    color: #fff; /* Warna teks */
    border: none; /* Tanpa border */
    padding: 10px 20px; /* Padding */
    border-radius: 5px; /* Border radius */
    cursor: pointer; /* Kursor */
  }
  
  /* Style untuk elemen footer */
  footer {
    background-color: #333; /* Warna latar belakang */
    color: #fff; /* Warna teks */
    text-align: center; /* Penataan teks */
    padding: 20px 0; /* Padding */
    margin-top: 20px; /* Margin atas */
  }
  </pre>
  <?php include "../kembali.php" ?>
</body>
</html>
