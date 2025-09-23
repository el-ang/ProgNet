<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Harga</title>
        <link rel="stylesheet" href="../../style/root.css">
        <link rel="stylesheet" href="../../style/table.css">
        <link rel="shortcut icon" href="../../src/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <main>
            <h4>Daftar Harga</h4>
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga (Rp)</th>
                </tr>
                <?php
                    $item = [
                        "MR.BREAD MANIS CHOCO" => 8500,
                        "GOOD TIME COOKIES CHOCOCHIP" => 10500,
                        "INDOMIE AYAM BAWANG" => 3100,
                        "BUAVITA GUAVA 1L" => 30000,
                        "MILKU SUSU ORIGINAL 200ML" => 3600,
                        "IDM SANTAN KELAPA 65ML" => 5300
                    ];
                    foreach ($item as $nama => $rp) {
                ?>
                    <tr>
                        <td><?= $nama ?></td>
                        <td align="right"><?= number_format($rp, 0, ",", ".") ?></td>
                    </tr>
                <?php } ?>
            </table>
        </main>
        <a href="../../" class="back">&larr; Kembali</a>
    </body>
</html>