<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6b.php</title>
    <style>
        .box {
            width: 40px;
            height: 40px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            margin: 2px;
            font-size: 20px;
            font-weight: bold;
        }
        .blue {
            background-color: lightblue;
        }
    </style>
</head>
<body>

    <form method="POST">
        <label for="angka">Masukkan Angka :</label>
        <input type="number" name="angka" id="angka" required>
        <button type="submit">Tampilkan</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = intval($_POST["angka"]);

        echo "<div>";
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                $warna = ($i % 2 == 0) ? "blue" : "";
                echo "<div class='box $warna'>$i</div>";
            }
            echo "<br>";
        }
        echo "</div>";
    }
    ?>

</body>
</html>
