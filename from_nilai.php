<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Form Nilai Mahasiswa</h5>
</div>
<form method="POST" action="./from_nilaisiswa.php">
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-dasar Pemrograman</option>
        <option value="Pemweb1">Pemrograman Web1</option>
        <option value="Pemweb2">Pemrograman Web2</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai_UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai_UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas/praktikum" class="col-4 col-form-label">Nilai_Tugas_Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas/praktikum" name="nilai_tugas/praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
    </div>
  </div>

<?php

if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas/praktikum'];

echo "<p>nama : $nama</p>";
echo "<p>matkul : $matkul</p>";
echo "<p>nilai_uts : $nilai_uts</p>";
echo "<p>nilai_uas : $nilai_uas</p>";
echo "<p>nilai_tugas : $nilai_tugas</p>";

//status kelulusan
$nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) +($nilai_tugas * 0.35);

//check nilai total
if ($nilai_total > 55) {
    echo "<p>status : lulus</p>";
} else {
    echo "<p>status : tidak lulus</p>";
}

}

?>


</body>
</html>
