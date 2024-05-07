<?php
// koneksi ke database
$link = mysqli_connect('localhost', 'root', '', 'pw2024_233040077');

// Query ke tabel mahasiswa
$result = mysqli_query($link, 'SELECT * FROM mahasiswa');
//menyiapkan data mahasiswa
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

$mahasiswa = $rows;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<div class="container">
    <h1>Daftar Mahasiswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['email'] ?></td>
                    <td><?= $mhs['jurusan'] ?></td>
                    <td>
                        <a href="#" class="badge text-bg-warning text-decoration-none">ubah</a>
                        <a href="#" class="badge text-bg-danger text-decoration-none">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>