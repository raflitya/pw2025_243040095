<?php
// Membuat array perangkat keras komputer
$hardware = ["Motherboard", "Proccesor", "Hard disk", "PC Coller", "VGA Card", "SSD"];

// Menampilkan isi array sebagai list menggunakan looping
echo "<h3>Macam-macam perangkat keras komputer </h3>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

// Menambahkan dua elemen baru ke dalam array
array_push($hardware, "Card Reader", "Modem");

sort($hardware);

// Menampilkan isi array setelah ditambahkan elemen baru
echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
?>
