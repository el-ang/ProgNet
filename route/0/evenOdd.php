<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ganjil/Genap</title>
        <link rel="stylesheet" href="../../style/root.css">
        <link rel="stylesheet" href="../../style/form.css">
        <link rel="shortcut icon" href="../../src/ico/ui/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./evenOdd.php" method="post">
            <h4>Ganjil/Genap</h4>
            <input type="number" name="n" placeholder="Masukkan bilangan" required>
            <button type="submit">Hitung</button>
        </form>
        <a href="../../" class="back">&larr; Kembali</a>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["n"])) { ?>
            <div id="pop">
                <p><?= ($n = $_POST["n"]) . " adalah bilangan&nbsp;<b>" . ($n % 2 === 0 ? "genap" : "ganjil") . "</b>." ?></p>
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