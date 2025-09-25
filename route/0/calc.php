<?php
    $a   = $_POST['a']   ?? '';
    $b   = $_POST['b']   ?? '';
    $op  = $_POST['op']  ?? '';
    $c   = $_POST['c']   ?? '';
    $los = $_POST['los'] ?? '';
    $in  = $_POST['in']  ?? '';

    $prev = '';
    $curr = '0';

    function norm($v) {
        if ($v==='') return '';
        if ($v==='.') return '0.';
        if (strpos($v,'.')===0) return '0'.$v;
        if (preg_match('/^0[0-9]+$/',$v) && strpos($v,'.')===false) return ltrim($v,'0');
        return $v;
    }

    if (is_numeric($in) || $in==='.' || $in==='±') {
        if ($op==='' && $c!=='' && $los==='=') $a=$b=$op=$c=$los=$prev='';
        $t = $op==='' ? $a : $b;
        if ($in==='±') $t = ($t!=='' && $t!=='0') ? (string)(-$t) : '0';
        elseif ($in==='.') $t = ($t===''||$t==='0') ? '0.' : (strpos($t,'.')===false?$t.'.':$t);
        else $t = $t==='0' ? $in : $t.$in;
        if ($op==='') $a=$t; else $b=$t;
    }

    elseif (in_array($in,['+','-','*','/'])) {
        if ($a!=='' && $b!=='' && $op!=='') {
            switch($op){
                case '+': $c=(float)$a+(float)$b; break;
                case '-': $c=(float)$a-(float)$b; break;
                case '*': $c=(float)$a*(float)$b; break;
                case '/': $c=(float)$b==0?'Error':(float)$a/(float)$b; break;
            }
            $prev="$a $op $b"; 
            $a=$c; $b='';
        }
        $op=$in; $los=$in;
    }

    elseif ($in==='=') {
        if ($a!=='' && $b!=='' && $op!=='') {
            switch($op){
                case '+': $c=(float)$a+(float)$b; break;
                case '-': $c=(float)$a-(float)$b; break;
                case '*': $c=(float)$a*(float)$b; break;
                case '/': $c=(float)$b==0?'Error':(float)$a/(float)$b; break;
            }
            $prev="$a $op $b";
            $a=$c; $b='';
        }
        $op=''; $los='=';
    }

    elseif ($in==='E') {
        if ($op==='') $a=''; else $b='';
    }

    elseif ($in==='A') {
        $a=$b=$op=$c=$los=''; $prev='';
    }

    elseif ($in==='C') {
        if ($op==='') $a=substr($a,0,-1);
        else $b=substr($b,0,-1);
    }

    $curr = $op==='' ? ($a===''?'0':$a) : ($b==='' ? "$a $op" : "$a $op $b");
    if ($curr===''||$curr==='-') $curr='0';
    if ($curr!=='Error') {
        $parts=explode(' ',$curr);
        foreach($parts as &$p) if(is_numeric($p)) $p=norm($p);
        $curr=implode(' ',$parts);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kalkulator Sederhana</title>
        <link rel="stylesheet" href="../../assets/style/root.css">
        <link rel="stylesheet" href="../../assets/style/form.css">
        <link rel="stylesheet" href="../../assets/style/calc.css">
        <link rel="shortcut icon" href="../../assets/ico/stack/web.svg" type="image/x-icon">
    </head>
    <body>
        <form action="./calc.php" method="post" id="calc">
            <input type="hidden" name="a" value="<?= htmlspecialchars($a) ?>">
            <input type="hidden" name="b" value="<?= htmlspecialchars($b) ?>">
            <input type="hidden" name="op" value="<?= htmlspecialchars($op) ?>">
            <input type="hidden" name="c" value="<?= htmlspecialchars($c) ?>">
            <input type="hidden" name="los" value="<?= htmlspecialchars($los) ?>">
            <input type="hidden" name="in" id="in">
            <h4>Kalkulator<br>Sederhana</h4>
            <div class="calc">
                <div class="display">
                    <p class="prev"><?= $prev ?></p>
                    <p class="curr"><?= $curr ?></p>
                </div>
                <div class="key">
                    <div class="num">
                        <?php
                            $numBtn = [ "±", "0", ".", "1", "2", "3", "4", "5", "6", "7", "8", "9" ];
                            foreach ($numBtn as $btn) {
                        ?>
                            <button data-val="<?= $btn ?>"><?= $btn ?></button>
                        <?php } ?>
                    </div>
                    <div class="op">
                        <?php
                            $opBtn = [
                                "E" => "CE", "A" => "CA",
                                "*" => "&times;", "/" => "&divide;",
                                "+" => "+", "-" => "-",
                                "=" => "=", "C" => "&#9003;",
                            ];
                            foreach ($opBtn as $val => $symbol) {
                        ?>
                            <button data-val="<?= $val ?>"><?= $symbol ?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </form>
        <a href="../../" class="back">&larr; Kembali</a>
        <script>
            document.querySelectorAll("button[data-val]").forEach(btn => {
                btn.type = "button";
                btn.addEventListener("click", () => {
                    document.getElementById("in").value = btn.dataset.val;
                    document.getElementById("calc").submit();
                });
            });
        </script>
    </body>
</html>