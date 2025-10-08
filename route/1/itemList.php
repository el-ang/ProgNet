<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Barang</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/list.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <main>
            <h4>Daftar Barang</h4>
            <ul>
                <?php
                    $item = [ "Buku Tulis", "Pulpen", "Penggaris", "Penghapus" ];
                    foreach ($item as $i) {
                ?>
                    <li><?= $i ?></li>
                <?php } ?>
            </ul>
        </main>
        <a href="../.." class="back">&larr; Kembali</a>
    </body>
</html>