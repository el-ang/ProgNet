<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Ucapan</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/form.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./formGreet.php" method="post">
            <h4>Form Ucapan</h4>
            <input type="text" name="nama" placeholder="Nama anda..." required>
            <button type="submit">Simpan</button>
        </form>
        <a href="../../" class="back">&larr; Kembali</a>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["nama"])) { ?>
            <div id="pop">
                <p>Halo&nbsp;<b><?= $_POST["nama"] ?></b>! Selamat belajar PHP!</p>
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