<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 8</h2>
    <form action="sexo.php" method="post">
        <label for="numero">Edad:</label>
        <input name="edad" type="num" value="">
        <label for="genero">Sexo:</label>
        <select name="genero">
            <option name="hombre" value="hombre">Hombre</option>
            <option name="mujer" value="mujer">Mujer</option>
        </select>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>