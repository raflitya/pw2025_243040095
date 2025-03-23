<?php
$mahasiswa = [['Raflitya', '243040095', 'raflitya123@gmail.com', 'teknik informatika'], ['aceng', '243040065', 'aceng@gmail.com', 'teknik mesin'] ,['Dandi','243040032','dandi@gmail.com','teknik pangan'],['sahron','233040058','sahron@gmail.com','teknik industri'],['ghasan','243040097','ghasan@gmail.com','teknik informatika'],['rhea','233040091','rhea@gmail.com','teknik elektro'],['raffi','243040062','raffi@gmail.com','teknik informatika'],['raihan','234040075','raihan@gmail.com','teknik sipil'],['fatur','243040094','fatur@gmail.com','teknik informatika'],['yaiza','243040084','yaiza@gmail.com','tenik informatika']];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
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