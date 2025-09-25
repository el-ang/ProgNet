<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baris Genap</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/form.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./even.php" method="post">
            <h4>Baris Genap</h4>
            <input type="number" name="a" placeholder="Bilangan pertama" required>
            <input type="number" name="z" placeholder="Bilangan terakhir" required>
            <button type="submit">Hitung</button>
        </form>
        <a href="../../" class="back">&larr; Kembali</a>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["a"]) && !empty($_POST["z"])) { ?>
            <div id="pop">
                <p>
                    <?php
                        $a = (int) $_POST["a"];
                        $z = (int) $_POST["z"];
                        if ($a > $z) {
                            echo "Bilangan pertama harus lebih kecil dari bilangan terakhir!";
                        } else {
                            echo "Bilangan genap dari&nbsp;<b>$a</b>&nbsp;sampai&nbsp;<b>$z</b>&nbsp;adalah:&nbsp;<b>";
                            for ($i = $a; $i <= $z; $i++) {
                                if ($i % 2 == 0) echo "$i" . ($i < $z - 1 ? ", " : ".</b>");
                            }
                        }
                    ?>
                </p>
            </div>
            <script>
                const overlay = document.getElementById("pop");
                overlay.addEventListener("click", e => {
                    if (e.target === overlay) overlay.remove();
                });
            </script>
        <?php } ?>
    </body>
</html>