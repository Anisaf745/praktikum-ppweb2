<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $matkul = isset($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : 0;
    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : 0;
    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : 0;

    $nilai_akhir = (0.3 * $nilai_uts) + (0.35 * $nilai_uas) + (0.35 * $nilai_tugas);

    $status = ($nilai_akhir > 55) ? "Lulus" : "Tidak Lulus";

    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        $grade = "A";
    } elseif ($nilai_akhir >= 70) {
        $grade = "B";
    } elseif ($nilai_akhir >= 56) {
        $grade = "C";
    } elseif ($nilai_akhir >= 36) {
        $grade = "D";
    } elseif ($nilai_akhir >= 0) {
        $grade = "E";
    }

    switch ($grade) {
        case "A":
            $predikat = "Sangat Memuaskan";
            break;
        case "B":
            $predikat = "Memuaskan";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
    }

    echo "<div class='container mt-5'>";
    echo "<h3>Hasil Penilaian</h3>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Mata Kuliah: $matkul</p>";
    echo "<p>Nilai UTS: $nilai_uts</p>";
    echo "<p>Nilai UAS: $nilai_uas</p>";
    echo "<p>Nilai Tugas: $nilai_tugas</p>";
    echo "<p>Nilai Akhir: $nilai_akhir</p>";
    echo "<p>Status: $status</p>";
    echo "<p>Grade: $grade</p>";
    echo "<p>Predikat: $predikat</p>";
    echo "</div>";
} 
?>
