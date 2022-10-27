<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $mult = $num1 * 2000;
    $mult2 = $num2 * 5000;
    $mult3 = $num3 * 500;
    $sum = $mult+$mult2+$mult3;

    echo "Volantes = ".$num1." * ".'2000'." = ".$mult."<br>"."Posters = ".$num2." * ".'5000'." = ".$mult2."<br>"."Posters = ".$num3." * ".'500'." = ".$mult3."<br>"."Pago total = ".$mult." + ".$mult2." + ".$mult3." = ".$sum;
?>