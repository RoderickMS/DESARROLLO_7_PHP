
<?php
$alumnos = [
[
    "nombre" => "Roderick",
    "nota" => 100,
    "ciudad" => "David"
],
[
    "nombre" => "Maria",
    "nota" => 92,
    "ciudad" => "Panamá"
],
[
    "nombre" => "Juan",
    "nota" => 80,
    "ciudad" => "Santiago"
]
];

echo $alumnos[0]["nombre"] . " tiene una nota de " . $alumnos[0]["nota"] . " y es de la ciudad de " . $alumnos[1]["ciudad"];
