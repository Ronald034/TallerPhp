<?php
$nombre = $_POST['nombre'];
$materia = $_POST['materia'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$prom = ($num1 + $num2 + $num3) / '3';
echo "Estudiante:"." ".$nombre."<br>"."Materia"." ".$materia."<br>". "Notas"." ".$num1." "."+"." ".$num2." "."+"." ".$num3." "."/3"."<br>"."Promedio total"." ".$prom;
?>