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
</head>
<body>
    <div class="container mt-5">
        <h2>Belanja Online</h2>
        <form method="POST" action="form_belanja.php">
            <div class="mb-3">
                <label class="form-label">Customer</label>
                <input type="text" class="form-control" name="customer" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Pilih Produk</label><br>
                <input type="radio" name="produk" value="TV"> TV
                <input type="radio" name="produk" value="KULKAS"> Kulkas
                <input type="radio" name="produk" value="MESIN CUCI"> Mesin Cuci
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>
            <button type="submit" class="btn btn-success">Kirim</button>
        </form>
        <hr>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <h4>Hasil Belanja</h4>
            <p>Nama Customer: <?= htmlspecialchars($customer) ?></p>
            <p>Produk Pilihan: <?= htmlspecialchars($produk) ?></p>
            <p>Jumlah Beli: <?= htmlspecialchars($jumlah) ?></p>
            <p>Total Belanja: Rp. <?= number_format($total_belanja, 0, ',', '.') ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
