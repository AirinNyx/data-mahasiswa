<?php
include 'koneksi.php';

$query = "
SELECT 
    m.nim,
    m.nama AS nama_mahasiswa,
    mk.id_matkul,
    mk.nama_matkul,
    n.nilai
FROM tb_nilai n
JOIN tb_mahasiswa m ON n.nim = m.nim
JOIN tb_matkul mk ON n.id_matkul = mk.id_matkul
";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Data Nilai Mahasiswa</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>id Matkul</th>
            <th>Nama Matkul</th>
            <th>Nilai</th>
          </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['nim']}</td>";
        echo "<td>{$row['nama_mahasiswa']}</td>";
        echo "<td>{$row['id_matkul']}</td>";
        echo "<td>{$row['nama_matkul']}</td>";
        echo "<td>{$row['nilai']}</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Data tidak ditemukan.";
}
?>
