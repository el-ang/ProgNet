<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float)$_POST['angka1'];
    $b = (float)$_POST['angka2'];
    $op = $_POST['operator'];

    switch ($op) {
        case 'tambah': $result = $a + $b; break;
        case 'kurang': $result = $a - $b; break;
        case 'kali':   $result = $a * $b; break;
        case 'bagi':   $result = $b != 0 ? $a / $b : "Error: Pembagi 0"; break;
        default: $result = "Operator tidak valid";
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Kalkulator</title></head>
<body style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;min-height:100vh;background:#eef2f7;">
    <div style="background:#fff;padding:20px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1);width:320px;text-align:center;">
        <h2>Kalkulator</h2>
        <form method="post">
            <input type="number" step="any" name="angka1" placeholder="Angka 1" required style="padding:10px;width:100%;margin:5px 0;border-radius:5px;border:1px solid #ccc;">
            <input type="number" step="any" name="angka2" placeholder="Angka 2" required style="padding:10px;width:100%;margin:5px 0;border-radius:5px;border:1px solid #ccc;">
            <select name="operator" style="padding:10px;width:100%;margin:5px 0;border-radius:5px;border:1px solid #ccc;">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">×</option>
                <option value="bagi">÷</option>
            </select>
            <button type="submit" style="padding:10px 20px;background:#2196F3;color:white;border:none;border-radius:5px;cursor:pointer;margin-top:10px;">Hitung</button>
        </form>
        <?php if ($result !== ""): ?>
            <p style="margin-top:15px;">Hasil: <b><?= $result ?></b></p>
        <?php endif; ?>
    </div>
</body>
</html>
