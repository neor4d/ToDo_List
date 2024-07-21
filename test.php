<?php

// $date = date('Y-m');
$date = date('2024-9');

// Obtener el día de la semana del primer día del mes
$primerDiaMes = date('N', strtotime("first day of $date"));

// Verificar si el primer día del mes no es lunes (es decir, si es martes, miércoles, jueves, viernes, sábado o domingo)
if ($primerDiaMes != 1) {

    // Calcular cuántos días faltan para llegar al lunes
    $diasFaltantes = $primerDiaMes - 1;

    // Imprimir "si" por cada día que falte
    for ($i = 0; $i < $diasFaltantes; $i++) {
        echo "Día faltante <br>";
    }

} else {
    echo 'Es Lunes 1';
}

?>