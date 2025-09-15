<?php
$biodata = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $umur = (int)$_POST['umur'];
    $jk = htmlspecialchars($_POST['jk']);
    $alamat = htmlspecialchars($_POST['alamat']);

    $biodata = "Halo, nama saya $nama. Umur saya $umur tahun. Saya seorang $jk. Saya tinggal di $alamat.";
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Biodata Singkat</title></head>
<body style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;min-height:100vh;background:#e8f5e9;">
    <div style="background:#fff;padding:20px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1);width:350px;text-align:center;">
        <h2>Biodata Singkat</h2>
        <form method="post">
            <input type="text" name="nama" placeholder="Nama" required style="padding:10px;width:100%;margin:5px 0;border-radius:5px;border:1px solid #ccc;">
            <input type="number" name="umur" placeholder="Umur" required style="padding:10px;width:100%;margin:5px 0;border-radius:5px;border:1px solid #ccc;">
            <select name="jk" required style="padding:10px;width:100%;margin:5px 0;border-radius:5px;border:1px solid #ccc;">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <textarea name="alamat" placeholder="Alamat" required style="padding:10px;width:100%;margin:5px 0;border-radius:5px;border:1px solid #ccc;"></textarea>
            <button type="submit" style="padding:10px 20px;background:#4CAF50;color:white;border:none;border-radius:5px;cursor:pointer;margin-top:10px;">Kirim</button>
        </form>
        <?php if ($biodata): ?>
            <p style="margin-top:15px;"><?= $biodata ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
