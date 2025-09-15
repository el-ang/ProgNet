<?php
$harga = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menu = $_POST['menu'];
    switch ($menu) {
        case 'nasi_goreng': $harga = "Rp20.000"; break;
        case 'soto': $harga = "Rp18.000"; break;
        case 'mie_ayam': $harga = "Rp15.000"; break;
        default: $harga = "Menu tidak tersedia";
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Menu Makanan</title></head>
<body style="font-family:sans-serif;display:flex;justify-content:center;align-items:center;min-height:100vh;background:#fff3e0;">
    <div style="background:#fff;padding:20px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1);width:320px;text-align:center;">
        <h2>Pilih Menu</h2>
        <form method="post">
            <select name="menu" style="padding:10px;width:100%;margin:10px 0;border-radius:5px;border:1px solid #ccc;">
                <option value="nasi_goreng">Nasi Goreng</option>
                <option value="soto">Soto</option>
                <option value="mie_ayam">Mie Ayam</option>
            </select>
            <button type="submit" style="padding:10px 20px;background:#FF9800;color:white;border:none;border-radius:5px;cursor:pointer;">Lihat Harga</button>
        </form>
        <?php if ($harga): ?>
            <p style="margin-top:15px;">Harga: <b><?= $harga ?></b></p>
        <?php endif; ?>
    </div>
</body>
</html>
