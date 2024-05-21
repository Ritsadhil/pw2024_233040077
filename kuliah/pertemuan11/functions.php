<?php

function koneksi()
{
    // koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040077');
    return $conn;
}

function query($query)
{
    // koneksi ke database
    $conn = koneksi();

    // Query ke tabel mahasiswa
    $result = mysqli_query($conn, $query);
    //menyiapkan data mahasiswa
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $query = "INSERT INTO mahasiswa
            VALUES (null, '$nama', '$nim', '$email', '$jurusan')
    ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
