<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <label for="nomor"><b>Masukkan Variabel Nomor : </b></label>
        <input type="text" name="nomor" id="nomor">
        <button type="submit" name="submit">Tampilkan</button>
    </form>
    <?php if (!isset($_POST["nomor"])) : ?>
        <p>Mohon Masukkan Variabel</p>
    <?php else : ?>

        <?php for ($i = $_POST["nomor"]; $i >= 1; $i--) : ?>
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