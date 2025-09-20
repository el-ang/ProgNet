<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemrograman Internet</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="shortcut icon" href="./src/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <header class="hero">
            <h1>
                <p>Pemr graman</p>
                <p>Internet</p>
            </h1>
            <div class="detail">
                <p>Repositori khusus materi dan penugasan pembelajaran kelas mata kuliah Pemrograman Internet.</p>
                <a href="https://github.com/el-ang/ProgNet">GitHub Repo</a>
            </div>
        </header>
        <main class="repo">
            <section class="basic">
                <h2>PHP Dasar</h2>
                <?php
                    $material = [
                        "Variabel, Operator, & Kondisi" => [
                            "Form Ucapan" => "formGreet",
                            "Kalkulator" => "calc",
                            "Ganjil/Genap" => "evenOdd",
                            "Nilai Huruf" => "grade",
                            "Menu Makanan" => "foodMenu",
                            "Form Biodata" => "formBio"
                        ],
                        "Looping & Array" => [
                            "Daftar Barang" => "itemList",
                            "Daftar Mahasiswa" => "studentList",
                            "Daftar Harga" => "priceList",
                            "Bilangan Genap" => "even",
                            "Data Mahasiswa" => "studentData",
                            "Nilai Mahasiswa" => "studentScore"
                        ],
                    ];
                    $j = 0;
                    foreach ($material as $deck => $card) {
                ?>
                    <div class="task">
                        <h3><?= $deck ?></h3>
                        <div class="deck">
                            <?php
                                $i = 1;
                                foreach ($card as $title => $file) {
                            ?>
                                <a href="./route/<?= $j ?>/<?= $file ?>.php" class="card">
                                    <h4><?= $title ?></h4>
                                    <p><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>/<?= str_pad(count($card), 2, '0', STR_PAD_LEFT) ?> - <?= str_pad($j, 2, '0', STR_PAD_LEFT) ?>/<?= str_pad(count($material), 2, '0', STR_PAD_LEFT) ?></p>
                                </a>
                            <?php
                                    $i++;
                                }
                            ?>
                        </div>
                    </div>
                <?php
                    $j++;
                }
                ?>
            </section>
        </main>
        <footer>
            <a class="copy" href="./LICENSE">
                <p>&copy; <?php echo date("Y"); ?> El Roy</p>
                <p>-</p>
                <p>Situmorang</p>
            </a>
            <div class="contact">
                <a href="https://github.com/el-ang"></a>
                <a href="https://instagram.com/el.ang_"></a>
                <a href="https://linkedin.com/in/el-ang"></a>
            </div>
        </footer>
    </body>
</html>