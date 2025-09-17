<?php
    //Comentario de una linea
    # Lo mismo
    /*
    Comentario de varias lineas
    */

    /*
    Como declarar VARIABLES
    comenzar con $
    empezar por letra o _
    solo usar letras, numeros o _
    las variables en php son Case Sensitive, importan las mayusculas
    */

    /**
     * Tipos de datos:
     * String
     * Integer
     * Float
     * Booleans
     * Arrays
     * Objects
     * NULL
     * Resource >> una referencia a una funcion, no un tipo de dato real.
     */
    echo "hola\n";

    $num1 = 2;
    $num2 = 3;

    $sum = $num1 + $num2;
    echo $sum;

    /**
     * Como concatenar:
     * Usar un . en vez de un +
     */
    $text1 = "Hola";
    $text2 = "Mundo";
    $text3 = $text1 . ' ' . $text2;
    /**
     * O tambien puedo hacer lo siguiente:
     * Las comillas simples interpretan el texto tal cual, las dobles como en el ejemplo de abajo entienden cuando se usa una variable
     */
    $text4 = "$text1 $text2";
    echo $text4;

    /**
     * Escape de caracteres, por ejemplo si queremos usar cosas como ?, $, ", o ' necesitamos escaparlos para que php no piense que 
     * estamos intentando operar de alguna forma con la cadena de texto
     */
    #$text5 = 'They're here'; esto estaria mal
    $text5 = 'They\'re here'; #asi estaria bien, tambien podemos usar comillas dobles para evitar tener que escapar caracteres, por ejemplo


    /**
     * Constantes
     * para declararlas necesitamos hacer uso de la funcion "define", convencionalmente se declaran en mayuscula, es una buena practica
     */
    define('SALUDO', 'Hola gente!');
    echo SALUDO;
?>