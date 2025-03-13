<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3>Form Nilai Siswa</h3>
        <form method="POST" action="nilai_siswa.php">
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="matkul">Mata Kuliah</label>
                <select class="form-control" id="matkul" name="matkul">
                    <option value="Dasar Pemrograman">Dasar Pemrograman</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="B Inggris">B Inggris</option>
                    <option value="Statistik Probalitas">Statistik Probalitas</option>
                    <option value="PPKN">PPKN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nilai_uts">Nilai UTS</label>
                <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="nilai_uas">Nilai UAS</label>
                <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="nilai_tugas">Nilai Tugas</label>
                <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" min="0" max="100" required>
            </div>
            <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
