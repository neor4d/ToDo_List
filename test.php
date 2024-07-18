<?php 

$starting_year = 2024; // Año en concreto
$years_to_print = 5; // Imprimir hasta 5 años

for ($year = $starting_year; $year < $starting_year + $years_to_print; $year++) {
    echo "Año: $year<br>";
    for ($month = 1; $month <= 12; $month++) {
        $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        echo "Mes: $month<br>";
        for ($day = 1; $day <= $numDays; $day++) {
            echo "$day, ";
        }
        echo "<br>";
    }
    echo "<br>";
}

?>