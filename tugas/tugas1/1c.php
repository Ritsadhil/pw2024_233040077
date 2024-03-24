<link rel="stylesheet" href="1c.css">
<?php
function boxPyramid()
{
    for ($i = 0; $i <= 10; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "<span>$j</span>";
        }
        if ($j = $i) {
            echo "</div>";
        }
        echo "<div>";
    }
}

boxPyramid();
