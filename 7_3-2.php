<?php
        $num_campos = $_POST["num_campos"];
        $tipo_campo = $_POST["tipo_campo"];

        echo "<form>";

        for ($i = 1; $i <= $num_campos; $i++) {
            echo "<label for='campo$i'>Campo $i:</label>";
            echo "<input type='$tipo_campo' id='campo$i' name='campo$i'><br>";
        }

        echo "</form>";
    ?>