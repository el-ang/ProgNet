<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Implementasi Lengkap</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
        <style>
            main {
                max-width: min(80vw, 80vh);
                padding: 1rem 2rem;
                background: var(--shd);
                border: 2px solid var(--bg);
                outline: 2px solid var(--prim);
                border-radius: 1rem;
                display: flex;
                flex-flow: column nowrap;
                justify-content: center;
                align-items: center;
                text-align: center;
                gap: .5rem;
            }
            
            main h4 {
                color: var(--prim);
                font-size: 2rem;
            }

            main a {
                width: 13.5rem;
                padding: .5rem;
                padding-left: 2.5rem;
                border: 2px solid var(--sec);
                outline: 2px solid var(--bg);
                background: var(--shd);
                color: var(--txt);
                border-radius: .5rem;
                position: relative;
                text-align: left;
                cursor: pointer;
            }

            main a:hover,
            main a:focus {
                border-color: var(--sub);
                background: var(--bg);
                color: var(--txt);
            }

            main a:active {
                border-color: var(--bg);
                background: var(--txt);
                color: var(--bg);
            }

            main a:before {
                content: "";
                width: 1.5rem;
                height: 1.5rem;
                position: absolute;
                top: 50%;
                left: .5rem;
                transform: translateY(-50%);
                background: var(--txt);
                --mask: var(--ico) center / cover no-repeat;
                -webkit-mask: var(--mask);
                mask: var(--mask);
            }

            main a:active:before {
                background: var(--bg);
            }

            <?php
                $ico = ["list", "db", "uPen", "valid", "sns"];
                foreach ($ico as $i => $v) {
            ?>main a:nth-of-type(<?= $i + 1 ?>) { --ico: url("../../assets/ico/ui/<?= $v ?>.svg"); }
            <?php } ?>
        </style>
    </head>
    <body>
        <main>
            <h4>Implementasi Lengkap</h4>
            <?php
                $menu = ["query" => "Lihat Query", "conn" => "Koneksi Database", "crud" => "Nilai Mahasiswa", "add" => "Tambah Data", "sns" => "Cari & Urut"];
                foreach ($menu as $a => $p) {
            ?>
            <a href="./<?php echo $a; ?>.php"><?php echo $p; ?></a>
            <?php } ?>
        </main>
        <a href="../../" class="back">&larr; Kembali</a>
    </body>
</html>