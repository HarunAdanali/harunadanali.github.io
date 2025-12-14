<?php
$sat=3;$sut=2;$n=1;
echo'<table border="1">';
for ($i= 1;$i<$sat;$i++) {
    echo "<tr>";
    for ($j= 1;$j<=$sut;$j++) {
        echo "<td>".$n++."</td>";
    }
    echo "</tr>";}
    echo "</table>";
?>