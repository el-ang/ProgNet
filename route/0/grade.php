<?php
$grade = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = (int)$_POST['nilai'];
    if ($nilai >= 85) $grade = "A";
    elseif ($nilai >= 70) $grade = "B";
    elseif ($nilai >= 55) $grade = "C";
    elseif ($nilai >= 40) $grade = "D";
    else $grade = "E";
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Penilaian</title></head>
<body style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;min-height:100vh;background:#f0f8ff;">
    <div style="background:#fff;padding:20px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1);width:300px;text-align:center;">
        <h2>Cek Nilai</h2>
        <form method="post">
            <input type="number" name="nilai" min="0" max="100" placeholder="Masukkan Nilai" required style="padding:10px;width:100%;margin:10px 0;border-radius:5px;border:1px solid #ccc;">
            <button type="submit" style="padding:10px 20px;background:#9C27B0;color:white;border:none;border-radius:5px;cursor:pointer;">Cek</button>
        </form>
        <?php if ($grade): ?>
            <p style="margin-top:15px;">Grade Anda: <b><?= $grade ?></b></p>
        <?php endif; ?>
    </div>
</body>
</html>
