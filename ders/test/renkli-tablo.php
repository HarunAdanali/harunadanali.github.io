<?php
$i = 10;
$sayac = 1;
echo "<table border='1'>";
while ($i-- > 0) {
    if ($i % 2)
        echo "<tr style='background-color: yellow;color: unset'>";
    else
        echo "<tr style='background-color: rgb(255, 38, 38); color: yellow '> ";
    $j = 10;

    while ($j-- > 0) {

        echo "<td style=' padding: 10px;'>$sayac</td>";
        $sayac++;
    }
    echo "</tr>";
}
echo "</table>";
?>