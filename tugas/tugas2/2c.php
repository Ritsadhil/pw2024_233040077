<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2C</title>
  <style>
    .box {
      display: inline-block;
      width: 30px;
      height: 30px;
      text-align: center;
      border: 1px solid black;
      background-color: red;
    }
  </style>
</head>
<body>
  <?php
  for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= 10; $j++) {
      if ($j <= $i) {
        echo "<div class='box'>";
        echo "$j ";
        echo "</div>";
      }
    }
    echo "<br>";
  }
  ?>
</body>
</html>