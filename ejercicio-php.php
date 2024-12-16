// ---------------- Ejercicios PHP (Modulo 13) ----------------
<br>
<br>
<br>

// 1.- Calcular e imprimir el area de un rectangulo.
<br>
<?php
$base = 6;
$altura = 4;

// Calcular el área
$area = $base * $altura;

echo "El área del rectángulo es: " . $area;
?>
<br>
<br>


// 2.- Verificar si un numero es par o impar.
<br>
<?php
$numero = 57;

if ($numero % 2 == 0){
    echo "El numero $numero es par.";
} else {
    echo "El numero $numero es impar.";
};
?>
<br>
<br>


// 3.- Comprobar si un estudiante aprobo o reprobo un examen.
<br>
<?php
$calificacion = 10;
$calificacionMinima = 6;

if ($calificacion >= $calificacionMinima) {
    echo "El estudiante aprobo la materia con una calificación de $calificacion.";
} else {
    echo "El estudiante reprobo la materia con una calificación de $calificacion.";
}
?>
<br>
<br>

// 4.- Calcular e imprimir la circunferencia de un circulo.
<br>
<?php
$radio = 10;
$pi = 3.1416;

$circunferencia = 2 * $pi * $radio;

echo "La circunferencia del círculo es: " . $circunferencia;
?>
<br>
<br>


// 5.- Determinar si un year es bisiesto o no.
<br>
<?php
$anno = 2024;

if (($anno % 4 == 0 && $anno % 100 != 0) || ($anno % 400 == 0)) {
    echo "El año $anno es bisiesto.";
} else {
    echo "El año $anno no es bisiesto.";
}
?>
<br>
<br>

// 6.- Determinar la estacion del año segun un mes (Por numero de mes).
<br>
<?php
$mes = 10;

if ($mes == 12 || $mes == 1 || $mes == 2) {
    echo "El mes $mes corresponde al invierno.";
} elseif ($mes >= 3 && $mes <= 5) {
    echo "El mes $mes corresponde a la primavera.";
} elseif ($mes >= 6 && $mes <= 8) {
    echo "El mes $mes corresponde al verano.";
} elseif ($mes >= 9 && $mes <= 11) {
    echo "El mes $mes corresponde al otoño.";
} else {
    echo "El número $mes no corresponde a un mes válido.";
}
?>