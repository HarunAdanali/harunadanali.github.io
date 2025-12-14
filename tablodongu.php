<html>

<head>
    <STYle>
        td {
            min-height: 100px;
            min-width: 100px;
            padding-bottom: 10px;
            padding-top: 10px;
            text-align: center;
        }
    </STYle>
</head>

<body>


    <table border="1">
        <?php
        $n = 1;
        for ($i = 0; $i < 10; $i++) {
            echo '<tr style="background-color: yellow; color: red;">';
            echo '<td>' . $n++ . '</td>';
            echo '<td>' . $n++ . '</td>';
            echo '</tr>';
            echo '<tr style="background-color: red; color: yellow;">';
            echo '<td>' . $n++ . '</td>';
            echo '<td>' . $n++ . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>