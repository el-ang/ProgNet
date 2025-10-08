<!-- mode: mahasiswa -->

<!-- mode: nilai -->

<!-- display form if it the page itself, but if it modular or submission then display json. default form-self, json-status -->
<?php
    require_once "./conn.php";

    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["mode"])) {
        header('Content-Type: application/json');
        $where = "";
        $fieldList = [];
        
        switch ($mode = strtolower($_GET["mode"])) {
            case "stud":
                if ($res = $conn->query("SHOW COLUMNS FROM mahasiswa")) {
                    $key = isset($_GET["key"]) ? $_GET["key"] : null;
                    
                    while ($row = $res->fetch_assoc()) {
                        $field = $row["Field"];
                        $type = $row["Type"];
                        $look = isset($_GET[$field]) ? $_GET[$field] : null;
                        $fieldList[$field] = $type;
                        
                        if (strpos($type, "int")) $where .= ($look? "OR " . $field . " = " . (int) $look : "") . ($key? "OR " . $field . " = " . (int) $key : "");
                        elseif (strpos($type, "decimal") || strpos($type, "float") || strpos($type, "double")) $where .= ($look? "OR " . $field . " = " . (float) $look : "") . ($key? "OR " . $field . " = " . (float) $key : "");
                        elseif (strpos($type, "date")) $where .= ($look? "OR " . $field . " = '" . $conn->real_escape_string(date("Y-m-d", strtotime($look))) . "'" : "") . ($key? "OR " . $field . " = '" . $conn->real_escape_string(date("Y-m-d", strtotime($key))) . "'" : "");
                        elseif (strpos($type, "time")) $where .= ($look? "OR " . $field . " = '" . $conn->real_escape_string(date("H:i:s", strtotime($look))) . "'" : "") . ($key? "OR " . $field . " = '" . $conn->real_escape_string(date("H:i:s", strtotime($key))) . "'" : "");
                        elseif (strpos($type, "datetime") || strpos($type, "timestamp")) $where .= ($look? "OR " . $field . " = '" . $conn->real_escape_string(date("Y-m-d H:i:s", strtotime($look))) . "'" : "") . ($key? "OR " . $field . " = '" . $conn->real_escape_string(date("Y-m-d H:i:s", strtotime($key))) . "'" : "");
                        else $where .= ($look? "OR " . $field . " LIKE '%" . $conn->real_escape_string($look) . "%'" : "") . ($key? "OR " . $field . " LIKE '%" . $conn->real_escape_string($key) . "%'" : "");
                    }
                }
                $sql = "SELECT * FROM mahasiswa " . (!empty($where) ? "WHERE " . substr($where, 3) : "") . (isset($_GET["sort"]) && array_key_exists($_GET["sort"], $fieldList) ? " ORDER BY " . $_GET["sort"] . (isset($_GET["order"]) && in_array(strtolower($_GET["order"]), ["asc", "desc"]) ? " " . strtoupper($_GET["order"]) : "") : "");
                $res = $conn->query($sql);
                $data = [];
                if ($res) while ($row = $res->fetch_assoc()) $data[] = $row;
                echo json_encode([
                    "status" => 200, 
                    "res" => "Success", 
                    "data" => $data
                ]);
                exit;
            case "sco":
                if ($res = $conn->query("SHOW COLUMNS FROM nilai")) {
                    $key = isset($_GET["key"]) ? $_GET["key"] : null;
                    
                    while ($row = $res->fetch_assoc()) {
                        $field = $row["Field"];
                        $type = $row["Type"];
                        $look = isset($_GET[$field]) ? $_GET[$field] : null;
                        $fieldList[$field] = $type;
                        
                        if (strpos($type, "int")) $where .= ($look? "OR n." . $field . " = " . (int) $look : "") . ($key? "OR n." . $field . " = " . (int) $key : "");
                        elseif (strpos($type, "decimal") || strpos($type, "float") || strpos($type, "double")) $where .= ($look? "OR n." . $field . " = " . (float) $look : "") . ($key? "OR n." . $field . " = " . (float) $key : "");
                        elseif (strpos($type, "date")) $where .= ($look? "OR n." . $field . " = '" . $conn->real_escape_string(date("Y-m-d", strtotime($look))) . "'" : "") . ($key? "OR n." . $field . " = '" . $conn->real_escape_string(date("Y-m-d", strtotime($key))) . "'" : "");
                        elseif (strpos($type, "time")) $where .= ($look? "OR n." . $field . " = '" . $conn->real_escape_string(date("H:i:s", strtotime($look))) . "'" : "") . ($key? "OR n." . $field . " = '" . $conn->real_escape_string(date("H:i:s", strtotime($key))) . "'" : "");
                        elseif (strpos($type, "datetime") || strpos($type, "timestamp")) $where .= ($look? "OR n." . $field . " = '" . $conn->real_escape_string(date("Y-m-d H:i:s", strtotime($look))) . "'" : "") . ($key? "OR n." . $field . " = '" . $conn->real_escape_string(date("Y-m-d H:i:s", strtotime($key))) . "'" : "");
                        else $where .= ($look? "OR n." . $field . " LIKE '%" . $conn->real_escape_string($look) . "%'" : "") . ($key? "OR n." . $field . " LIKE '%" . $conn->real_escape_string($key) . "%'" : "");
                    }
                }
                if ($res = $conn->query("SHOW COLUMNS FROM mahasiswa")) {
                    while ($row = $res->fetch_assoc()) {
                        $field = $row["Field"];
                        $type = $row["Type"];
                        $look = isset($_GET[$field]) ? $_GET[$field] : null;
                        $fieldList[$field] = $type;
                        
                        if (strpos($type, "int")) $where .= ($look? "OR m." . $field . " = " . (int) $look : "") . ($key? "OR m." . $field . " = " . (int) $key : "");
                        elseif (strpos($type, "decimal") || strpos($type, "float") || strpos($type, "double")) $where .= ($look? "OR m." . $field . " = " . (float) $look : "") . ($key? "OR m." . $field . " = " . (float) $key : "");
                        elseif (strpos($type, "date")) $where .= ($look? "OR m." . $field . " = '" . $conn->real_escape_string(date("Y-m-d", strtotime($look))) . "'" : "") . ($key? "OR m." . $field . " = '" . $conn->real_escape_string(date("Y-m-d", strtotime($key))) . "'" : "");
                        elseif (strpos($type, "time")) $where .= ($look? "OR m." . $field . " = '" . $conn->real_escape_string(date("H:i:s", strtotime($look))) . "'" : "") . ($key? "OR m." . $field . " = '" . $conn->real_escape_string(date("H:i:s", strtotime($key))) . "'" : "");
                        elseif (strpos($type, "datetime") || strpos($type, "timestamp")) $where .= ($look? "OR m." . $field . " = '" . $conn->real_escape_string(date("Y-m-d H:i:s", strtotime($look))) . "'" : "") . ($key? "OR m." . $field . " = '" . $conn->real_escape_string(date("Y-m-d H:i:s", strtotime($key))) . "'" : "");
                        else $where .= ($look? "OR m." . $field . " LIKE '%" . $conn->real_escape_string($look) . "%'" : "") . ($key? "OR m." . $field . " LIKE '%" . $conn->real_escape_string($key) . "%'" : "");
                    }
                }
                $sql = "SELECT n.*, m.nim, m.nama, m.prodi FROM nilai n LEFT JOIN mahasiswa m ON n.mahasiswa_id = m.id " . (!empty($where) ? "WHERE " . substr($where, 3) : "") . (isset($_GET["sort"]) && array_key_exists($_GET["sort"], $fieldList) ? " ORDER BY " . $_GET["sort"] . (isset($_GET["order"]) && in_array(strtolower($_GET["order"]), ["asc", "desc"]) ? " " . strtoupper($_GET["order"]) : "") : "");
                $res = $conn->query($sql);
                $data = [];
                if ($res) while ($row = $res->fetch_assoc()) $data[] = $row;
                echo json_encode([
                    "status" => 200, 
                    "res" => "Success", 
                    "data" => $data
                ]);
                exit;
            default:
                echo json_encode([
                    "status" => 404, 
                    "res" => "Mode not found or invalid. Use 'mahasiswa' or 'nilai'."
                ]);
                exit;
        }
    }

    if (basename($_SERVER["PHP_SELF"]) === "sns.php") {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search & Sort</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/form.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./sns.php" method="get">
            <h4>Cari</h4>
            <div class="stud">
                <h5>Data Mahasiswa</h5>
                <input type="text" name="nim" placeholder="NIM">
                <input type="text" name="nama" placeholder="Nama">
                <input type="text" name="prodi" placeholder="Prodi">
                <h5>Urutkan</h5>
                <input type="checkbox" name="sort" id="sort" value="nim">
                <input type="checkbox" name="sort" id="sort" value="nama">
                <input type="checkbox" name="sort" id="sort" value="prodi">
            </div>
            <div class="sco">
                <h5>Nilai Mahasiswa</h5>
                <input type="number" name="nim" placeholder="NIM">
                <input type="text" name="nama" placeholder="Nama">
                <input type="text" name="prodi" placeholder="Prodi">
                <input type="text" name="mata_kuliah" placeholder="Mata Kuliah">
                <input type="number" name="sks" placeholder="SKS">
                <input type="text" name="nilai_huruf" placeholder="Nilai Huruf">
                <input type="number" step="0.01" name="nilai_angka" placeholder="Nilai Angka">
                <h5>Urutkan</h5>
                <input type="checkbox" name="sort" id="sort" value="nim">
                <input type="checkbox" name="sort" id="sort" value="nama">
                <input type="checkbox" name="sort" id="sort" value="prodi">
                <input type="checkbox" name="sort" id="sort" value="mata_kuliah">
                <input type="checkbox" name="sort" id="sort" value="sks">
                <input type="checkbox" name="sort" id="sort" value="nilai_huruf">
                <input type="checkbox" name="sort" id="sort" value="nilai_angka">
            </div>
            <input type="text" name="key" placeholder="Kata kunci...">
            <input type="hidden" name="mode" value="stud">
            <input type="checkbox" name="mode" value="sco">
            <button>Cari & Urutkan</button>
        </form>
        <a href="../.." class="back">&larr; Kembali</a>
        <script>
        </script>
    </body>
</html>
<?php
    }
    if ($conn) mysqli_close($conn);
?>