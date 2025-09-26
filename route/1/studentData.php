<!DOCTYPE html>
<html lang="en" data-overlayscrollbars-initialize>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="../../assets/style/overlayscrollbars.min.css">
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/table.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
        <script src="../../assets/script/lib/overlayscrollbars.browser.es5.min.js" defer></script>
        <script src="../../assets/script/main.js" defer></script>
    </head>
    <body data-overlayscrollbars-initialize>
        <main style="margin: 3rem; margin-bottom: 0;">
            <h4>Data Mahasiswa</h4>
            <table>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Prodi</th>
                </tr>
                <?php
                    $acc = [
                        [ "NIM" => 2305551048, "Nama" => "Marcellino Elrobson Purba", "Umur" => 20, "Prodi" => "Teknologi Informasi", "IG" => "marcellinoelr" ],
                        [ "NIM" => 2305551081, "Nama" => "Kadek Aditya Gimas Tangkas Kori Agung", "Umur" => 21, "Prodi" => "Teknologi Informasi", "IG" => "aditangkas__" ],
                        [ "NIM" => 2305551093, "Nama" => "Raihan Dharma Nugroho", "Umur" => 21, "Prodi" => "Teknologi Informasi", "IG" => "reehan.dn" ],
                        [ "NIM" => 2305551100, "Nama" => "Carlos Qnova Bha'a Gani", "Umur" => 21, "Prodi" => "Teknologi Informasi", "IG" => "carlosqnova" ],
                        [ "NIM" => 2305551105, "Nama" => "El Roy Situmorang", "Umur" => 21, "Prodi" => "Teknologi Informasi", "IG" => "el.ang_" ],
                        [ "NIM" => 2305551106, "Nama" => "I Gusti Ngurah Kade Sukahadi Rastra", "Umur" => 20, "Prodi" => "Teknologi Informasi", "IG" => "gukara._" ],
                        [ "NIM" => 2305551107, "Nama" => "Made Pradnyan Pranata", "Umur" => 20, "Prodi" => "Teknologi Informasi", "IG" => "pradnyanpranata" ],
                        [ "NIM" => 2305551113, "Nama" => "Anak Agung Gede Bagus Wiswaprayadnya Natha", "Umur" => 20, "Prodi" => "Teknologi Informasi", "IG" => "ngungzz" ],
                        [ "NIM" => 2305551144, "Nama" => "Ezza Putra Wibawa", "Umur" => 24, "Prodi" => "Teknologi Informasi", "IG" => "zaaptrw" ],
                        [ "NIM" => 2305551150, "Nama" => "I Made Rangga Harikesa Subhiksa", "Umur" => 23, "Prodi" => "Teknologi Informasi", "IG" => "rahes_23" ],
                        [ "NIM" => 2305551152, "Nama" => "I Gusti Agung Ngurah Lucien Yudistira Purnawarman", "Umur" => 21, "Prodi" => "Teknologi Informasi", "IG" => "lucienyudistira" ],
                        [ "NIM" => 2305551164, "Nama" => "Dio Febriansyah Lubis", "Umur" => 20, "Prodi" => "Teknologi Informasi", "IG" => "diolubisss" ]
                    ];
                    foreach ($acc as $mahasiswa) {
                        $nim = $mahasiswa["NIM"];
                        $name = $mahasiswa["Nama"];
                        $age = $mahasiswa["Umur"];
                        $prodi = $mahasiswa["Prodi"];
                        $ig = $mahasiswa["IG"];
                ?>
                    <tr>
                        <td><?= $nim ?></td>
                        <td><a href="https://instagram.com/<?= $ig ?>" target="_blank"><?= $name ?></a></td>
                        <td><?= $age ?></td>
                        <td><?= $prodi ?></td>
                    </tr>
                <?php } ?>
                    </table>
        </main>
        <a href="../../" class="back">&larr; Kembali</a>
    </body>
</html>