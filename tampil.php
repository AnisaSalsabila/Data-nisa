<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <hr>

    <table>
        <tr>
            <th>NO.</th>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>   
        </tr>
        <?php
            include 'koneksi.php'
            $no     = 1;
            $query  = 'SELECT *FROM mhs';
            $data   = mysqli_query($konek, $query)

        while($mhs = mysqli_fetch_array($data)){
            
        }
    </table>
</body>
</html>