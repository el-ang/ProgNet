<?php
$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = (int)$_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Cek Ganjil Genap</title></head>
<body style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;min-height:100vh;background:#fafafa;">
    <div style="background:#fff;padding:20px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1);width:300px;text-align:center;">
        <h2>Cek Ganjil / Genap</h2>
        <form method="post">
            <input type="number" name="angka" placeholder="Masukkan Angka" required style="padding:10px;width:100%;margin:10px 0;border-radius:5px;border:1px solid #ccc;">
            <button type="submit" style="padding:10px 20px;background:#FF5722;color:white;border:none;border-radius:5px;cursor:pointer;">Cek</button>
        </form>
        <?php if ($hasil): ?>
            <p style="margin-top:15px;">Angka tersebut adalah: <b><?= $hasil ?></b></p>
        <?php endif; ?>
    </div>
</body>
</html>
