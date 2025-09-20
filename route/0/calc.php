<?php
    $c = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="../../style/root.css">
    <link rel="stylesheet" href="../../style/form.css">
    <link rel="shortcut icon" href="../../src/ico/ui/web.svg" type="image/x-icon">
</head>
<body>
    <form action="." method="post">
        <h4>Kalkulator Sederhana</h4>
        <div class="calc">
            <div class="display">
                <p class="prev"><?= $a ?> <?= $op ?> <?= $b ?></p>
                <p class="curr"><?= $c ?></p>
            </div>
            <div class="key">
                <div class="num">
                    <button id="0">0</button>
                    <button id="1">1</button>
                    <button id="2">2</button>
                    <button id="3">3</button>
                    <button id="4">4</button>
                    <button id="5">5</button>
                    <button id="6">6</button>
                    <button id="7">7</button>
                    <button id="8">8</button>
                    <button id="9">9</button>
                </div>
                <div class="op">

                </div>
            </div>
        </div>
    </form>
    <a href="../../" class="back">&larr; Kembali ke Beranda</a>
</body>
</html>
