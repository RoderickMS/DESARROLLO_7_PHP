
<?php
$alumnos = [
    ["nombre" => "Roderick", "nota" => 100],
    ["nombre" => "Maria", "nota" => 92],
    ["nombre" => "Juan", "nota" => 80]
];

foreach ($alumnos as $alumno) {
    echo  $alumno["nombre"] . "- nota" . $alumno["nota"] . "<br><br>";

}
