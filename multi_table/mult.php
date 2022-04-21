<?php

function multiply($x, $y) {
    $z = $x * $y;
    return $z;
}

echo "<table>";
for ($x = 0; $x <= 100; $x++) {
    echo "<tr>";
    for ($y = 0; $y <= 100; $y++) {
        if ($x == 0) {
            if ($y == 0) {
                echo "<th> </th>";
            } else {
                echo "<th>$y</th>";
            }
        } else if ($y == 0) {
            echo "<th>$x</th>";
        } else {
            echo "<td>" . multiply($x, $y) . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>