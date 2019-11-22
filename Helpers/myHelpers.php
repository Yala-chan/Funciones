<?php
function insert(string $tableName, array $toInsert) {
    $campos = "(".implode(', ', array_keys($toInsert)).")";
    $valores = "('".implode("','", array_values($toInsert))."')";
    $insert = "INSERT INTO $tableName $campos values $valores;";
    return $insert;
}

function insertV2(string $ref, string $tableName, array $toInsert) {
    $campos = "(".implode(', ', array_keys($toInsert)).")";
    $valores = "('".implode("','", array_values($toInsert))."')";
    return str_replace('valors', $valores, str_replace('camps', $campos, str_replace('taula', $tableName, $ref)));
}

function suma(int $operacion1, int $operacion2): int {
    return $operacion1 + $operacion2;
}

function multiplicacion(int $operacion1, int $operacion2): int {
    return $operacion1 * $operacion2;
}

function resta(int $operacion1, int $operacion2): int {
    return $operacion1 - $operacion2;
}

function hacerOperacion(callable $operacion, int $operacion1, int$operacion2): int {
    return $operacion($operacion1, $operacion2);
}

function calcular(string $simbolo, int $operacion1, int$operacion2): int {
    switch ($simbolo) {
        case "+":
            $operacion = 'suma';
            break;
        case "-":
            $operacion = 'resta';
            break;
        case "x":
            $operacion = 'multiplicacion';
            break;
        
        default:
            return null;
    }
    return hacerOperacion($operacion, $operacion1, $operacion2);
}

function mostrarOperacion(string $simbolo, int $operacion1, int$operacion2): string {
    return "$operacion1 $simbolo $operacion2 = ".calcular($simbolo, $operacion1, $operacion2);
}
?>