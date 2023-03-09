<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Proses</title>
</head>
<body>
    
<form method="GET">
    Nama : <input type="text" name="nama" value="" size="30"><br/>
    Matakuliah :
    <select name="matkul">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Perograman Web</option>
    </select><br>
    NILAI UTS : <input type="text" name="nilai_uts" value="" size="6"><br>
    NILAI UAS : <input type="text" name="nilai_uas" value="" size="6"><br>
    NILAI Praktikum : <input type="text" name="nilai_tugas" value="" size="6"><br>
    <button name="proses">Simpan</button>
</form>

<?php
error_reporting(0);
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

?>

<?= $proses ?>
<br> Nama Siswa <?= $nama_siswa ?>
<br> Matakuliah <?= $mata_kuliah ?>
<br> nilai UTS <?= $nilai_uts ?>
<br> nilai UAS <?= $nilai_uas ?>
<br> nilai tugas <?= $nilai_tugas ?>
</body>
</html>