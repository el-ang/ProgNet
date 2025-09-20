<?php
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['nama']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Ucapan</title>
</head>
<body style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;min-height:100vh;background:#f4f6f9;">
    <div style="background:#fff;padding:20px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1);width:300px;text-align:center;">
        <h2>Form Ucapan</h2>
        <form method="post">
            <input type="text" name="nama" placeholder="Masukkan Nama" required
                style="padding:10px;width:100%;margin:10px 0;border:1px solid #ccc;border-radius:5px;">
            <button type="submit" style="padding:10px 20px;background:#4CAF50;color:white;border:none;border-radius:5px;cursor:pointer;">Kirim</button>
        </form>
        <?php if ($name): ?>
            <p style="margin-top:15px;">Halo, <b><?= $name ?></b> selamat belajar PHP!</p>
        <?php endif; ?>
    </div>
</body>
</html>
