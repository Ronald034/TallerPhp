<?php
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $dif = $n1 - $n2;
    $dif2 = $n2 - $n1;

    if($n1>$n2){
        echo " el hermano mayor tiene ".$n1." años con la diferencia de ".$dif." años";
    }else{
        echo " el hermano mayor tiene ".$n2." años con la diferencia de ".$dif2." años";
    }
?>