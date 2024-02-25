<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2D</title>
  <style>
    .board {
      display: grid;
      grid-template-columns: repeat(5, 30px);
      grid-template-rows: repeat(5, 30px);
    }
    .box {
      width: 30px;
      height: 30px;
      text-align: center;
      border: 1px solid black;
    }
    .black {
      background-color: black;
    }
    .white {
      background-color: white;
    }
  </style>
</head>
<body>
  <div class="board">
    <?php
    for ($i = 1; $i <= 5; $i++) {
      for ($j = 1; $j <= 5; $j++) {
        if (($i + $j) % 2 == 0) {
          echo "<div class='box black'></div>";
        } else {
          echo "<div class='box white'></div>";
        }
      }
    }
    ?>
  </div>
</body>
</html>