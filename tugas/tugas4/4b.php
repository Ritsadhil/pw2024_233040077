<?php
$hardwares = ["CPU", "GPU", "Hard drive", "Motherboard", "PSU", "RAM"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Macam-macam perangkat keras komputer</h3>
        <ol>
            <?php foreach ($hardwares as $hw) : ?>
                <li><?php echo $hw; ?></li>
            <?php endforeach; ?>
        </ol>

    </div>

    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php array_push($hardwares, "Heat sink", "SSD") ?>
        <?php sort($hardwares); ?>
        <?php foreach ($hardwares as $hw) : ?>
            <li><?php echo $hw; ?></li>
        <?php endforeach; ?>
    </ol>

</body>

</html>