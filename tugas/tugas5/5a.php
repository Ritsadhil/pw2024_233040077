<?php
$proplayer = [
    [
        "ign" => "F0rsaken",
        "nama" => "Jason Susanto",
        "tim" => "Paper Rex",
        "asal" => "Indonesia",
        "status" => "Active",
        "gambar" => "f0rsaken.jpg"
    ],
    [
        "ign" => "Mindfreak",
        "nama" => "Alessandro Aaron Leonhart",
        "tim" => "Paper Rex",
        "asal" => "Indonesia",
        "status" => "Active",
        "gambar" => "mindfreak.jpg"
    ],
    [
        "ign" => "D4v41",
        "nama" => "Ahmad Khalish Rusyaidee bin Nordin",
        "tim" => "Paper Rex",
        "asal" => "Malaysia",
        "status" => "Active",
        "gambar" => "d4v41.jpg"
    ],
    [
        "ign" => "something",
        "nama" => "Ilya Petrov",
        "tim" => "Paper Rex",
        "asal" => "Russia",
        "status" => "Active",
        "gambar" => "something.jpg"
    ],
    [
        "ign" => "Monyet",
        "nama" => "Cahya Nugraha",
        "tim" => "Paper Rex",
        "asal" => "Indonesia",
        "status" => "Active",
        "gambar" => "monyet.jpg"
    ],
    [
        "ign" => "Jinggg",
        "nama" => "Wang Jing Jie",
        "tim" => "Paper Rex",
        "asal" => "Indonesia",
        "status" => "Active",
        "gambar" => "jinggg.jpg"
    ],
    [
        "ign" => "Sayaplayer",
        "nama" => "Ha Jung-woo",
        "tim" => "T1",
        "asal" => "South Korea",
        "status" => "Active",
        "gambar" => "sayaplayer.jpg"
    ],
    [
        "ign" => "xccurate",
        "nama" => "Kevin Susanto",
        "tim" => "T1",
        "asal" => "Indonesia",
        "status" => "Active",
        "gambar" => "sekuret.jpg"
    ],
    [
        "ign" => "Carpe",
        "nama" => "Lee Jae-hyeok",
        "tim" => "Paper Rex",
        "asal" => "South Korea",
        "status" => "Active",
        "gambar" => "carpe.jpg"
    ],
    [
        "ign" => "iZu",
        "nama" => "Ham Woo-joo",
        "tim" => "T1",
        "asal" => "South Korea",
        "status" => "Active",
        "gambar" => "izu.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro player APAC Valorant </title>
    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <h1>Pro Player APAC Valorant</h1>
    <?php foreach ($proplayer as $pp) : ?>
        <ul>
            <li>
                <img src="img/<?= $pp["gambar"]; ?>">
            </li>
            <li>IGN : <?= $pp["ign"]; ?></li>
            <li>nama : <?= $pp["nama"]; ?></li>
            <li>Tim : <?= $pp["tim"]; ?></li>
            <li>Asal : <?= $pp["asal"]; ?></li>
            <li>Status : <?= $pp["status"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>