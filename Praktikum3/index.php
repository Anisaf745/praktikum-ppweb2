<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <div class="container mt-5">
        <h2>Selamat Datang di Perpustakan STT-NF</h2>
        <P>Silakan pilih isi buku dibawah ini</P>
        <form method="post" action="kunjungan.php">
            <div class="form-group row">
                <label for="Fullname" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="Fullname" name="Fullname" type="text" class="form-control" aria-describedby="FullnameHelpBlock" required="required"> 
                <span id="FullnameHelpBlock" class="form-text text-muted">Isi Nama Lengkap kamu</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="Email" name="Email" type="text" class="form-control" aria-describedby="EmailHelpBlock" required="required"> 
                <span id="EmailHelpBlock" class="form-text text-muted">Isi dengan email aktif kamu</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Message" class="col-4 col-form-label">Keperluan</label> 
                <div class="col-8">
                <textarea id="Message" name="Message" cols="40" rows="5" class="form-control" required="required"></textarea>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>