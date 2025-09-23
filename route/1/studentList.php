<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
        <link rel="stylesheet" href="../../style/root.css">
        <link rel="stylesheet" href="../../style/list.css">
        <link rel="shortcut icon" href="../../src/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <main>
            <h4>Daftar Mahasiswa</h4>
            <ol style="padding-left: 8rem">
                <?php
                    $acc = [
                        2305551048 => "Marcellino Elrobson Purba",
                        2305551081 => "Kadek Aditya Gimas Tangkas Kori Agung",
                        2305551093 => "Raihan Dharma Nugroho",
                        2305551100 => "Carlos Qnova Bha'a Gani",
                        2305551105 => "El Roy Situmorang",
                        2305551106 => "I Gusti Ngurah Kade Sukahadi Rastra",
                        2305551107 => "Made Pradnyan Pranata",
                        2305551113 => "Anak Agung Gede Bagus Wiswaprayadnya Natha",
                        2305551144 => "Ezza Putra Wibawa",
                        2305551150 => "I Made Rangga Harikesa Subhiksa",
                        2305551152 => "I Gusti Agung Ngurah Lucien Yudistira Purnawarman",
                        2305551164 => "Dio Febriansyah Lubis"
                    ];
                    foreach ($acc as $nim => $name) {
                ?>
                    <li value="<?= $nim ?>"><?= $name ?></li>
                <?php } ?>
            </ol>
        </main>
        <a href="../../" class="back">&larr; Kembali</a>
    </body>
</html>