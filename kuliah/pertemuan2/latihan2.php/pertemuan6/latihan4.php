<?php
$mahasiswa = [['nama' => 'Raflitya',
               'nim' => '243040095',
               'email'=> 'raflitya123@gmail.com',
               'jurusan'=> 'teknik informatika'], 
              ['aceng', '243040065', 'aceng@gmail.com', 'teknik mesin']];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array bersarang</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama:<?= $m[0]; ?></li>
            <li>Nim:<?= $m[1]; ?></li>
            <li>Email:<?= $m[2]; ?></li>
            <li>Jurusan:<?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>     