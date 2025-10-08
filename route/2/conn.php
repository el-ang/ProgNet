<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "kampus";

    $conn = null;
    $connErr = null;
    $isDBExist = false;

    try {
        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            if (strpos($conn->connect_error, "Unknown database") !== false) throw new Exception("Database '$db' tidak ditemukan!");
            else throw new Exception("Connection failed: " . $conn->connect_error);
        }

        $isDBExist = true;
    } catch (Exception $e) {
        $connErr = $e->getMessage();

        try {
            $conn = new mysqli($host, $user, $pass);

            if ($conn->connect_error) throw new Exception("Connection failed: " . $conn->connect_error);
        } catch (Exception $ex) {
            $connErr = $ex->getMessage();

            if ($conn) {
                $conn->close();
                $conn = null;
            }
        }
    }

    if (basename($_SERVER["PHP_SELF"]) === "conn.php") {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Koneksi Database</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/list.css">
        <link rel="stylesheet" href="../../assets/style/table.css">
        <link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <main>
            <h4>Koneksi Database</h4>
            <?php if ($conn) { ?>
            <b>Status: OK ✅</b>
            <table>
                <tr><th>Property</th><th>Value</th></tr>
                <tr><td>Host</td><td><?= $host ?></td></tr>
                <?= $isDBExist ? "<tr><td>Database</td><td>$db</td></tr>" : "" ?>
                <tr><td>Server Info</td><td><?= $conn->server_info ?></td></tr>
                <tr><td>Server Version</td><td><?= $conn->server_version ?></td></tr>
                <tr><td>Protocol Version</td><td><?= $conn->protocol_version ?></td></tr>
            </table>
            <?php
                if ($isDBExist) try {
                    $result = $conn->query("SHOW TABLES");
                    if ($result && $result->num_rows > 0) {
            ?>
            <h5>Daftar Tabel (<?= $result->num_rows ?> total)</h5>
            <ul><?php while ($row = $result->fetch_array()) { ?><li><?= $row[0] ?></li><?php } ?></ul>
            <?php } else { ?><p>Tidak ada tabel ditemukan</p><?php } } catch (Exception $e) { ?><p><b>Database Error</b>:&nbsp<?= $e->getMessage() ?></p><?php } else { ?> <p>Belum terhubung ke database</p><?php } } else { ?>
            <b>Status: Tidak Terhubung ❌</b>
            <p><b>Error</b>:&nbsp<?= $connErr ?></p>
            <?php } ?>
        </main>
        <a href="../.." class="back">&larr; Kembali</a>
    </body>
</html>
<?php } ?>