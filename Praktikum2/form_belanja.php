<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Daftar Harga</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light">TV : Rp. 4.200.000</li>
                        <li class="list-group-item bg-light">Kulkas : Rp. 3.100.000</li>
                        <li class="list-group-item bg-light">Mesin Cuci : Rp. 3.800.000</li>
                        <li class="list-group-item bg-light">Kipas Angin : Rp. 4.000.000</li>
                        <li class="list-group-item bg-light">Sepeda : Rp. 5.900.000</li>
                    </ul>
                    <div class="card-footer bg-primary text-white">Harga Dapat Berubah Setiap Saat</div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>Belanja Online</h3>
                <hr />
                <form method="POST" action="">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label text-right">Customer</label>
                        <div class="col-6">
                            <input id="nama" name="nama" type="text" class="form-control" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-4 text-right">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk1" type="radio" class="custom-control-input" value="TV" required>
                                <label for="produk1" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk2" type="radio" class="custom-control-input" value="Kulkas" required>
                                <label for="produk2" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk3" type="radio" class="custom-control-input" value="Mesin Cuci" required>
                                <label for="produk3" class="custom-control-label">Mesin Cuci</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk3" type="radio" class="custom-control-input" value="Mesin Cuci" required>
                                <label for="produk3" class="custom-control-label">Kipas Angin</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk3" type="radio" class="custom-control-input" value="Mesin Cuci" required>
                            <label for="produk3" class="custom-control-label">Sepeda</label>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label text-right">Jumlah</label>
                        <div class="col-4">
                            <input id="jumlah" name="jumlah" type="number" class="form-control" required min="1">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

                <hr />
                <?php
                if (isset($_POST['proses'])) {
                    $nama_customer = $_POST['nama'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];

                    $harga_produk = [
                        "TV" => 4200000,
                        "Kulkas" => 3100000,
                        "Mesin Cuci" => 3800000,
                        "Kipas Angin" => 4000000,
                        "Sepeda" => 5900000
                    ];

                    $total_harga = $harga_produk[$produk] * $jumlah;

                    echo "<div class='card mt-4'>";
                    echo "<div class='card-header bg-info text-white'><h5>Struk Belanja</h5></div>";
                    echo "<div class='card-body'>";
                    echo "<p>Nama Customer: $nama_customer</p>";
                    echo "<p>Produk: $produk</p>";
                    echo "<p>Jumlah: $jumlah</p>";
                    echo "<p>Total Harga: Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
                    echo "</div></div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
