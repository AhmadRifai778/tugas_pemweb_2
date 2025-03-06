<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'] ?? '';
    $produk = $_POST['produk'] ?? '';
    $jumlah = $_POST['jumlah'] ?? '';
    
    $harga_produk = [
        "TV" => 4200000,
        "KULKAS" => 3100000,
        "MESIN CUCI" => 3800000
    ];
    
    $total_belanja = isset($harga_produk[$produk]) ? $harga_produk[$produk] * $jumlah : 0;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-primary">Belanja Online</h2>
        <form method="POST" action="form_belanja.php">
            <div class="mb-3">
                <label class="form-label fw-bold">Customer</label>
                <input type="text" class="form-control" name="customer" required placeholder="Masukkan Nama Anda">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Pilih Produk</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="produk" value="TV" required>
                    <label class="form-check-label">TV</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="produk" value="KULKAS" required>
                    <label class="form-check-label">Kulkas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="produk" value="MESIN CUCI" required>
                    <label class="form-check-label">Mesin Cuci</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" required placeholder="Masukkan jumlah beli">
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
        <hr>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <div class="alert alert-info mt-3">
                <h4 class="text-center">Hasil Belanja</h4>
                <p><strong>Nama Customer:</strong> <?= htmlspecialchars($customer) ?></p>
                <p><strong>Produk Pilihan:</strong> <?= htmlspecialchars($produk) ?></p>
                <p><strong>Jumlah Beli:</strong> <?= htmlspecialchars($jumlah) ?></p>
                <p><strong>Total Belanja:</strong> Rp. <?= number_format($total_belanja, 0, ',', '.') ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
