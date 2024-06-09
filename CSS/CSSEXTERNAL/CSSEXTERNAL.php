<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS External</title>
    <!-- CSS External -->
    <link rel="stylesheet" href="CSSEXTERNAL.css">
    <!-- Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
    <h1>Contoh Penulisan CSS External</h1>
    <pre style="font-size: xx-large;">
&lt;link rel="stylesheet" href="CSSEXTERNAL.css"&gt;

h1 {
    color: blue;
    font-size: 24px;
}
    </pre>
    <a class="btn btn-primary" href="CSSEXTERNAL.css" download>Download CSS</a>

    <h1 class="text-success">Contoh Penulisan CSS CDN Bootstrap</h1>
    <pre style="font-size: xx-large;">
&lt;h1 class="text-success"&gt;Contoh Penulisan CSS CDN Bootstrap&lt;/h1&gt;
    </pre>
    <?php include "../kembali.php"; ?>
    <!-- Bootstrap JavaScript dari CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
