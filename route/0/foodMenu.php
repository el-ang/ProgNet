<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu Makan</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/form.css">
        <link rel="stylesheet" href="../../assets/style/food.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./foodMenu.php" method="post">
            <h4>Menu Makan</h4>
            <select name="menu" required>
                <option value="" disabled selected hidden>Pilih menu</option>
                <option value="nasgor">Nasi Goreng Jakarta</option>
                <option value="soto">Soto Sapi Lamongan</option>
                <option value="mie">Mie Ayam Medan</option>
            </select>
            <button type="submit">Cek Harga</button>
        </form>
        <a href="../.." class="back">&larr; Kembali</a>
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["menu"])) {
                switch ($menu = $_POST["menu"]) {
                    case "nasgor": $menu = "Nasi Goreng Jakarta"; $p = 12000; break;
                    case "soto": $menu = "Soto Sapi Lamongan"; $p = 10000; break;
                    case "mie": $menu = "Mie Ayam Medan"; $p = 15000; break;
                    default: $p = 0;
                }
        ?>
            <div id="pop">
                <div class="food">
                    <h5 class="<?= $_POST["menu"] ?>"><?= $menu ?></h5>
                    <p>Harga: Rp.&nbsp;<b><?= number_format($p, 0, ",", ".") ?></b></p>
                </div>
            </div>
            <script>
                const overlay = document.getElementById("pop");
                overlay.addEventListener("click", e => { if (e.target === overlay) overlay.remove(); });
            </script>
        <?php } ?>
    </body>
</html>