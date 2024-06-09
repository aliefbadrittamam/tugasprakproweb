<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML DEMO</title>
    <!-- Menggunakan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            border: 2px solid #007bff;
            border-radius: 15px;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
            border: 2px solid #007bff;
            border-radius: 30px;
            padding: 15px 30px;
            font-size: 18px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body class="bg-secondary d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <h2 class="text-center mb-4">Pilih Materi Pembelajaran</h2>

        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <a href="HTML/html.php" class="btn btn-custom btn-lg btn-block">HTML</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="bootstrap.php" class="btn btn-custom btn-lg btn-block">Bootstrap</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="CSS/CSS.php" class="btn btn-custom btn-lg btn-block">CSS</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="javascript.php" class="btn btn-custom btn-lg btn-block">JavaScript</a>
            </div>
        </div>

       
    <!-- Menggunakan Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
