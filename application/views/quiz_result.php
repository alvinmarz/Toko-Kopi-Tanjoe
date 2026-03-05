
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi Kopi</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .recommendation-container {
            margin-top: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h3 {
            color: #343a40;
            font-weight: bold;
            text-align: center;
        }
        p {
            font-size: 1.2rem;
            text-align: center;
        }
        .btn-custom {
            display: block;
            margin: 10px auto;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 recommendation-container">
                <h3>Hasil Rekomendasi Kopi Kamu</h3>
                <p>Berdasarkan pilihan Anda, kami merekomendasikan: <strong><?= $recommendation; ?></strong></p>
                <!-- Tombol Ulangi Quiz -->
                <a href="<?= base_url('quiz'); ?>" class="btn btn-primary btn-custom">Ulangi</a>
                <!-- Tombol Kembali ke Menu Home -->
                <a href="<?= base_url('welcome'); ?>" class="btn btn-secondary btn-custom">Kembali ke Menu Home</a>
            </div>
        </div>
    </div>
    <!-- Tambahkan Bootstrap JS dan dependensi Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
