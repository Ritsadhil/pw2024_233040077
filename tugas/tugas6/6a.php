<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if (!isset($_GET["nomor"])) : ?>
        <h2>Masukkan Variabel "nomor" ke akhir URL</h2>
        <p>Contoh: localhost/....../6a.php?nomor=10</p>
    <?php else : ?>

        <?php for ($i = $_GET["nomor"]; $i >= 1; $i--) : ?>
            <div class="row">
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <?php if ($i % 2 == 0) : ?>
                        <div class="kotak k1">
                            <h2><?= "$i" ?></h2>
                        </div>
                    <?php else : ?>
                        <div class="kotak k2">
                            <h2><?= "$i" ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($i == $j) : ?>
                        <br>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    <?php endif; ?>
</body>

</html>