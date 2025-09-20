<?php

# substract
# Devuelve un trozo de un string
/*
$salida = substr('Pagafantas',4, 5);
echo $salida;

echo '<br>';

$salida2 = substr('Cocacolastic',-8, 4);
echo $salida2;*/


# string lenght
# Devuelve la longitud de un string
/*
$salida = strlen('Hola mundo');
echo $salida;*/


# Posicion del strig
# Devuelve la posicion de la primera instacia de la subcadena a buscar dentro de una cadena
/*
$salida = strpos('Hola mundo', 'o');//primera instancia = busca izq a dcha
echo $salida;

$salida2 = strrpos('Hola mundo', 'o');//ultima instancia = busca dcha a izq
echo $salida2;*/


# Recortar
# Elimina espacios (solo por al principio y al final)
/*
$texto = '     Hola     mund   o.       ';
var_dump($texto);

$recortada = trim($texto);
var_dump($recortada);*/


# Poner en mayusculas y minusculas
# pone la cadena en mayusc o minuscula respectivamente
/*
$salida = strtoupper('Hola Mundo');
echo $salida;

$salida2 = strtolower('Hola Mundo');
echo $salida2;

#tambien se puede poner solo la primera, cuidado que no pone en minuscula el resto!
$salida3 = ucwords('hola mundO');
echo $salida3;*/


# Reemplazar cadena
# Reemplaza todas las ocurrencias de la cadena encontrada con un sustituto
/*
$texto = 'Hola Mundo';
$salida = str_replace('Mundo', 'gente!', $texto);
echo $salida;*/


# Comporobar si algo es una cadena
/*
$valor = '22';
$valor2 = 22;
$salida = is_string($valor);
$salida2 = is_string($valor2);

echo $salida; #Si devuelve verdadero, retorna 1
echo $salida2; #Si devuelve falso, no devuelve nada

var_dump($salida2);*/


/* Este ejemplo permite ver facilmente que considera este metodo como "string"
$valores = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
foreach ($valores as $val) {
    if (is_string($val)){
        echo "{$val} es un string<br>";
    }
}*/


# Comprimir strings

$string = "Lorem ipsum dolor sit amet consectetur adipiscing elit arcu curabitur, blandit
 suscipit porttitor etiam aptent vestibulum nulla magna feugiat, et facilisi ornare sapien pulvinar
 
Tortor quis magnis integer metus diam nam non, praesent elementum in iaculis neque ridiculus 
placerat, nulla dictum cursus augue ornare pharetra. Aliquet et nostra quisque sapien varius nascetur, 
fames sagittis suspendisse dapibus viverra aenean, neque fringilla vulputate mattis massa. Dignissim est
 inceptos risus in varius augue orci, neque primis ullamcorper fermentum pellentesque iaculis mus, ac
  tempus ridiculus cum malesuada nostra.";

$comprimido = gzcompress($string);
echo $comprimido; #Muestra texto comprimido, ilegible

# Descomprimir

$original = gzuncompress($comprimido);
echo $original;
?>