<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Kopi</title>
    <!-- Link Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h3>Temukan Kopi yang Cocok untuk Kamu</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('quiz/result') ?>" method="post">
                        <!-- Pertanyaan Quiz -->
                        <div class="form-group">
                            <label><strong>Pilih rasa yang Anda sukai:</strong></label>
                            <select name="flavor" class="form-control" required>
                                <option value="bold">Pahit dan Kuat</option>
                                <option value="smooth">Lembut dan Halus</option>
                                <option value="fruity">Asam dan Segar</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label><strong>Pilih tingkat keasaman yang Anda inginkan:</strong></label>
                            <select name="acidity" class="form-control" required>
                                <option value="low">Rendah</option>
                                <option value="medium">Sedang</option>
                                <option value="high">Tinggi</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Lihat Hasil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Link Bootstrap JS (Optional for interactivity) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
