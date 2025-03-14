<?php
require_once("BukuTamu.php");
session_start();
if (!isset($_SESSION["bukutamu"])) {
    $_SESSION['bukutamu'] = [];
} 
if (isset($_POST['submit'])) {
    $bukutamu = new BukuTamu();

    $bukutamu->timestamp = date("Y-m-d H:i:s");
    $bukutamu->Fullname = $_POST["Fullname"];
    $bukutamu->Email = $_POST["Email"];
    $bukutamu->Message = $_POST["Message"];

    array_push($_SESSION['bukutamu'], $bukutamu);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container my-5">
    <h2 class="mb-4">Daftar Kunjungan</h2>
    <table class="table table-bordered">
        <thead></thead>
            <tr>
                <th>Timestamp</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        <tbody>
            <?php foreach ($_SESSION["bukutamu"] as $entry): ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($entry->timestamp); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($entry->Fullname); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($entry->Email); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($entry->Message); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php">&lt;&lt;&lt; Kembali</a>
</div>
</body>
</html>