<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$punt1 = $num1 * '3';
$punt2 = $num3 * '0';
$punt = $punt1 + $num2 + $punt2;
echo "P.ganados"."="." ".$num1." "."*"." "."3 puntos"."="." ".$punt1."<br>"."P.empatados"."="." ".$num2." "."*"." "."1 puntos"."="." ".$num2."<br>"."P.perdidos"."="." ".$num3." "."*"." "."0 puntos"."="." ".$punt2."<br>"."Puntaje total"." "."="." ".$punt1." "."+"." ".$num2." "."+"." ".$punt2." "."=".$punt;
?>