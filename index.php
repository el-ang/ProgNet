<!DOCTYPE html>
<html lang="en" data-overlayscrollbars-initialize>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemrograman Internet</title>
        <link rel="stylesheet" href="./assets/style/overlayscrollbars.min.css">
        <link rel="stylesheet" href="./assets/style/root.css">
        <link rel="stylesheet" href="./assets/style/home.css">
        <link rel="stylesheet" href="./assets/style/page.css">
        <link rel="stylesheet" href="./assets/style/foot.css">
        <link rel="shortcut icon" href="./assets/ico/stack/web.svg" type="image/x-icon">
        <script src="./assets/script/lib/overlayscrollbars.browser.es5.min.js" defer></script>
        <script src="./assets/script/main.js" defer></script>
    </head>
    <body data-overlayscrollbars-initialize>
        <header class="hero">
            <h1>
                <p>Pemr graman</p>
                <p>Internet</p>
            </h1>
            <div class="detail">
                <p>Repositori khusus materi dan penugasan pembelajaran kelas mata kuliah Pemrograman Internet.</p>
                <a href="https://github.com/el-ang/ProgNet">Lihat di GitHub &rarr;</a>
            </div>
        </header>
        <main id="repo">
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
                        "Loop & Array" => [
                            "Daftar Barang" => "itemList",
                            "Daftar Mahasiswa" => "studentList",
                            "Daftar Harga" => "priceList",
                            "Baris Genap" => "even",
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
                                    <p><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>/<?= str_pad(count($card), 2, '0', STR_PAD_LEFT) ?> - <?= str_pad($j + 1, 2, '0', STR_PAD_LEFT) ?>/<?= str_pad(count($material), 2, '0', STR_PAD_LEFT) ?></p>
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
            <section>
                <a class="copy" href="https://github.com/el-ang/ProgNet/licenses/LICENSE">
                    <p>&copy; 2025 El Roy</p>
                    <p>-</p>
                    <p>Situmorang</p>
                </a>
                <div class="cred">
                    <p><a href="https://github.com/googlefonts/spacemono">Space Mono Font</a> by <a href="https://instagram.com/colophonfoundry">Colophon Foundry</a>,<br>distributed by <a href="https://fonts.google.com/specimen/Space+Mono">Google Fonts</a></p>
                    <p><a href="https://boxicons.com">Boxicons</a> by <a href="https://github.com/atisawd">Atisa</a></p>
                    <p><a href="https://github.com/google/material-design-icons">Material Design Icons</a> originated by <a href="https://google.com">Google</a><br>And <a href="https://github.com/material-extensions/vscode-material-icon-theme">Material Extension Icons</a> by <a href="https://github.com/PKief">Philipp Kief</a></p>
                    <p><a href="https://kingsora.github.io/OverlayScrollbars">OverlayScrollbars</a> by <a href="https://github.com/KingSora">Rene Haas</a></p>
                </div>
            </section>
            <section>
                <div class="contact">
                    <a href="https://github.com/el-ang"></a>
                    <a href="https://instagram.com/el.ang_"></a>
                    <a href="https://linkedin.com/in/el-ang"></a>
                </div>
                <b class="addr">
                    PROGRAM STUDI SARJANA<br><a href="https://instagram.com/hmtiudayana">TEKNOLOGI INFORMASI</a><br>
                    <a href="https://instagram.com/ftunud">FAKULTAS TEKNIK</a><br>
                    <a href="https://unud.ac.id">UNIVERSITAS UDAYANA</a><br>
                    GANJIL 2025/2026
                </b>
            </section>
        </footer>
    </body>
</html>