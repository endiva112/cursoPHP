<?php

/**
 * Tipos:
 * ==
 * ===
 * <
 * >
 * <=
 * =>
 * !=
 * !==
 */
/*
$num = '5';

if($num > 5) {
    echo 'pasa';
} else {
    echo 'no pasa';
}*/

/*
//Anidando ifs
$num = 5;

if ($num > 4) {
    if ($num < 10) {
        echo "$num passed";
    }
}*/

//OPERADORES LOGICOS
/**
 * AND  &&
 * OR   ||
 * XOR  
 */
/*
//Una mejor forma de hacer lo mismo, puedo usar la pabra o el simbolo
$num = 6;
if ($num > 4 OR $num < 10) {
    echo "$num passed";
}*/

//SWITCH
$colorFavorito = 'rojo';
switch($colorFavorito) {
    case 'rojo':
        echo 'Tu color favorito es el rojo';
        break;
    case 'azul':
        echo 'Tu color favorito es el azul';
        break;
    case 'amarillo':
        echo 'Tu color favorito es el amarillo';
        break;
    case 'verde':
        echo 'Tu color favorito es el verde';
        break;
    default:
        echo 'Tu color favorito es otro';
}

?>