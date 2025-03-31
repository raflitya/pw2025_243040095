<?php
$angka = isset($_GET['angka']) ? intval($_GET['angka']) : 10; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6a</title>
    <style>
        .box {
            display: inline-block;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            border: 1px solid black;
            margin: 2px;
            font-size: 20px;
            font-weight: bold;
        }
        .blue {
            background-color: lightblue;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    
    <?php
    
    echo "<div style='display: inline-block;'>";
    for ($i = $angka, $num = $angka; $i >= 1; $i--, $num--) {
        $rowColor = ($num % 2 == 0) ? 'white' : 'blue';
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box $rowColor'>$num</div>";
        }
        echo "<br>";
    }
    echo "</div>";
    ?>
</body>
</html>