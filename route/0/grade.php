<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nilai Huruf</title>
        <link rel="stylesheet" href="../../style/root.css">
        <link rel="stylesheet" href="../../style/form.css">
        <link rel="shortcut icon" href="../../src/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./grade.php" method="post">
            <h4>Nilai Huruf</h4>
            <input type="number" name="n" placeholder="Masukkan nilai" required>
            <button type="submit">Hitung</button>
        </form>
        <a href="../../" class="back">&larr; Kembali</a>
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["n"])) {
                $n = $_POST["n"];
                if ($n >= 85 && $n <= 100) {
                    $grade = "A";
                } else if ($n >= 70) {
                    $grade = "B";
                } else if ($n >= 55) {
                    $grade = "C";
                } else if ($n >= 40) {
                    $grade = "D";
                } else if ($n >= 0) {
                    $grade = "E";
                } else {
                    $grade = "tidak valid";
                }
        ?>
            <div id="pop">
                <p><?= "Skor anda ${n}. Nilai anda&nbsp;<b>${grade}</b>." ?></p>
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