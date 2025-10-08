<?php
    require_once "conn.php";

    $isConnErr = !$conn && isset($connErr);
    $sql = file_get_contents("../../db/kampus.sql");
    $que = array_filter(array_map("trim", explode(";", $sql)));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inisialisasi DB & Tabel</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/form.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
        <style>
            form { max-width: 80rem; }
            
            form h4 {
                color: var(--prim);
                font-size: 2rem;
                text-align: center;
                margin: 0;
            }
            
            pre {
                background: var(--bg);
                border: 2px solid var(--sec);
                border-radius: .5rem;
                padding: 1rem;
                width: max-content;
                text-align: left;
                white-space: pre;
                overflow-x: auto;
                color: var(--txt);
                line-height: 1.4;
                margin: 0;
            }

            form button {
                width: max-content;
            }
        </style>
    </head>
    <body>
        <form action="./query.php" method="post">
            <h4>Inisialisasi Database & Tabel</h4>
            <pre><?= $sql ?></pre>
            <?php if ($isConnErr) { ?><div class="error"><p><b>Error</b>:&nbsp<?= $connErr ?></p></div><?php } else { ?><button name="exe">Jalankan</button><?php } ?>
        </form>
        <?php if (isset($_POST["exe"]) && $conn) { ?>
        <div id="pop">
        <?php 
            try {
                if (mysqli_multi_query($conn, $sql)) {
                    $queCount = 0;
                    $okCount = 0;
                    
                    do {
                        $queCount++;
                        if (mysqli_store_result($conn)) {
                            $okCount++;
                            mysqli_free_result(mysqli_store_result($conn));
                        } elseif (mysqli_errno($conn)) throw new Exception("#$queCount" . mysqli_error($conn));
                        else $okCount++;
                    } while (mysqli_more_results($conn) && mysqli_next_result($conn));
        ?>  <p><b>Berhasil</b>:&nbsp<?= $okCount ?> dari <?= $queCount ?> query dapat dijalankan</p> <?php } else throw new Exception(mysqli_error($conn)); } catch (Exception $e) { ?> <p><b>Error</b>:&nbsp<?= $e->getMessage() ?></p> <?php } } ?>
        </div>
        <?php if ($conn) mysqli_close($conn); ?>
        <script>
            const overlay = document.getElementById("pop");
            overlay.addEventListener("click", e => { if (e.target === overlay) overlay.remove(); });
        </script>
        <a href="../.." class="back">&larr; Kembali</a>
    </body>
</html>