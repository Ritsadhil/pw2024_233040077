<link rel="stylesheet" href="1c.css">
<?php
        function boxPyramid() {
            for ( $i = 1; $i <= 4; $i++ ) {
                for ( $j = 1; $j < $i; $j++ ) {
                    echo "<span>$j</span>";
                }
                if ( $j = $i ) {
                    echo "</div>";
                }
                echo "<div>";
            }
        }