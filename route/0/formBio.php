<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Biodata</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/form.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./formBio.php" method="post">
            <h4>Form Biodata</h4>
            <input type="text" name="nama" placeholder="Nama anda..." required>
            <input type="number" name="umur" placeholder="Umur anda..." required>
            <select name="gender" required>
                <option value="" disabled selected hidden>Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <textarea name="alamat" placeholder="Alamat anda..." required></textarea>
            <button type="submit">Simpan</button>
        </form>
        <a href="../../" class="back">&larr; Kembali</a>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["nama"]) && !empty($_POST["umur"]) && !empty($_POST["gender"]) && !empty($_POST["alamat"])) { ?>
            <div id="pop">
                <p>Halo, nama saya&nbsp;<b><?= $_POST["nama"] ?></b>. Umur saya&nbsp;<b><?= $_POST["umur"] ?></b>&nbsp;tahun. Saya seorang&nbsp;<b><?= $_POST["gender"] ?></b>. Saya tinggal di&nbsp;<b><?= $_POST["alamat"] ?></b>.</p>
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