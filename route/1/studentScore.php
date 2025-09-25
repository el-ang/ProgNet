<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nilai Mahasiswa</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/table.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <main>
            <h4>Nilai Mahasiswa</h4>
            <table>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Nilai</th>
                    <th>Ket.</th>
                </tr>
                <?php
                    $acc = [
                        [ "NIM" => 2305551048, "Nama" => "Marcellino Elrobson Purba", "Umur" => 20 ],
                        [ "NIM" => 2305551081, "Nama" => "Kadek Aditya Gimas Tangkas Kori Agung", "Umur" => 21 ],
                        [ "NIM" => 2305551093, "Nama" => "Raihan Dharma Nugroho", "Umur" => 21 ],
                        [ "NIM" => 2305551100, "Nama" => "Carlos Qnova Bha'a Gani", "Umur" => 21 ],
                        [ "NIM" => 2305551105, "Nama" => "El Roy Situmorang", "Umur" => 21 ],
                        [ "NIM" => 2305551106, "Nama" => "I Gusti Ngurah Kade Sukahadi Rastra", "Umur" => 20 ],
                        [ "NIM" => 2305551107, "Nama" => "Made Pradnyan Pranata", "Umur" => 20 ],
                        [ "NIM" => 2305551113, "Nama" => "Anak Agung Gede Bagus Wiswaprayadnya Natha", "Umur" => 20 ],
                        [ "NIM" => 2305551144, "Nama" => "Ezza Putra Wibawa", "Umur" => 24 ],
                        [ "NIM" => 2305551150, "Nama" => "I Made Rangga Harikesa Subhiksa", "Umur" => 23 ],
                        [ "NIM" => 2305551152, "Nama" => "I Gusti Agung Ngurah Lucien Yudistira Purnawarman", "Umur" => 21 ],
                        [ "NIM" => 2305551164, "Nama" => "Dio Febriansyah Lubis", "Umur" => 20 ]
                    ];
                    foreach ($acc as $mahasiswa) {
                        $nim = $mahasiswa["NIM"];
                        $name = $mahasiswa["Nama"];
                        $age = $mahasiswa["Umur"];
                        $nilai = rand(0, 100);
                ?>
                    <tr>
                        <td><?= $nim ?></td>
                        <td><?= $name ?></td>
                        <td><?= $age ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $nilai >= 70 ? "Lulus" : "Tidak Lulus" ?></td>
                    </tr>
                <?php } ?>
            </table>
        </main>
        <a href="../../" class="back">&larr; Kembali</a>
    </body>
</html>