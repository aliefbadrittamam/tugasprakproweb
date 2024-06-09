<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS External</title>
    <!-- CSS External -->
    <link rel="stylesheet" href="SELECTORCLASS.css">
    <!-- Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
    <h1>contoh penggunaan SELECTORCLASS PADA INPUT TYPE</h1>
   <form action="#">
    <input class="input" type="text" username="" id="" placeholder="Username">
    <input class="input" type="password" name="password" id="" placeholder="password">
   </form>
    <p>ini adalah FORM INPUT YANG KAN DI DESAIN yang akan di desain berwarna hijau </p>
    <h3>Ini contoh Kodenya </h3>
    <pre style="font-size: xx-large;">
    /* Gaya untuk elemen input */
.input {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Gaya untuk elemen input saat di-hover */
.input:hover {
    border-color: #007bff;
}

/* Gaya untuk elemen input saat fokus */
.input:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

    </pre>
    <a class="btn btn-primary" href="SELECTORCLASS.css" download>Download CSS</a>

    <?php include "../kembali.php"?>
   
    <!-- Bootstrap JavaScript dari CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
