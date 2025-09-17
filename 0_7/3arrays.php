<?php
/**
 * Un array es una variable que almacena varios valores
 * 
 * Tipos de array:
 * index
 * asociativos
 * multi dimensionales
 */

/**
 * Index
 * los arrays comienzan en 0, es por eso que este echo nos dara a pepe y no a kevin
 * acceder a un valor fuera de limites nos dará un error
 */
$gente = array("Kevin","Pepe","Manuel");
//echo $gente[1];

$ids = array("23","55","12") ;
//echo $ids[2];

/**
 * Antes usamos la funcion array para crearlo, pero tambien se puedo hacer usando corchetes
 */
$coches = ['Honda', 'Toyota', 'Ford'];
//echo $coches[0];


/**
 * Como agregar elementos a un array, si sabemos el index, se puede hacer asi
 */
$coches[3] = 'Chevrolet';
/**
 * Si no, lo hacemos así:
 */
$coches[] = 'BMW';

//Comprobar que ocurre si meto datos en el 5 sin haber un 4 por ejemplo                         IMPORTANT

/**
 * Una forma de echo para arrays
 * util para el debugging
 */
//print_r($coches);

/**
 * otra funcion muy comoda para el debugging es:
 */
//var_dump($coches);

/**
 * ARRAYS ASOCIATIVOS
 * suenan a ser lo mismo que los diccionarios
 * 
 * Basicamente tenemos nuestra clave, en este caso, es el nombre de la gente, y el valor es su edad
 */
$gente = array('Brad' => 35,'Jose' => 32,'William' => 37);
#echo $gente['Brad'];

$ids = [22 => 'Brad', 23 => 'Jose', 24 => 'William'];
#echo $ids[22];

/**
 * Para agregar datos a este tipo de array, lo hariamos asi:
 */
$gente['Mark'] = 5;
#print_r($gente);


/**
 * Arrays multidimensional
 * Es un array dentro de un array
 */
$superarray = array(
    $array1 = array('Honda', 21, 10),
    $array2 = array('Toyota', 30, 20),
    $array3 = array('Ford', 23, 12)
);
/**
 * Acceder a esta info es un poco mas coñazo
 * El primer corchete es el array al que queremos acceder y el segundo al valor de dicho array, [0][0] seria 'Honda', [1][2] seria '20'
 */
echo $superarray[0][0];


?>