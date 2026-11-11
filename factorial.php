
<?php

// 1. Verificar que la solicitud sea POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Método no permitido");
}

// 2. Recibir el número enviado desde HTML
$numero = filter_input(INPUT_POST, "numero", FILTER_VALIDATE_INT);

// 3. Validar el dato
if ($numero === false || $numero === null || $numero < 0 || $numero > 20) {
    exit("Ingresa un número entero entre 0 y 20.");
}

// 4. Calcular el factorial
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

// 5. Mostrar el resultado
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del factorial</title>
</head>
<body>

    <h1>Resultado</h1>

    <p>El factorial de <?= $numero ?> es:</p>

    <h2><?= $factorial ?></h2>

    <a href="index.html">Volver</a>

</body>
</html>
