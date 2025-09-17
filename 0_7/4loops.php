<?php
    /**
     * Un loop permite ejecutar codigo una X cantidad de veces
     * 
     * Tipos:
     * For
     * While
     * Do while
     * Foreach
     */

    /*
    Se usa cuando sabemos exactamente cuantas veces se ha de ejecutar el bucle
    #For loop
    for ($i = 0; $i < 10; $i++) {
    echo 'Number ' .$i;
    echo '<br>'; //Esto permite hacer salto de linea
    }*/

    /*
    De forma general while se usa solo cuando no sabemos la condicion exacta para salir del loop
    #While loop
    $i = 0;
    while ($i < 10) {
        echo $i;
        echo '<br>';
        $i++;
    }*/

    /*
    //Similar al while pero te aseguras de que siempre se ejecuta al menos 1 vez
    #Do while loop
    $i = 0;
    do {
        echo $i;
        echo '<br>';
        $i++;
    } while ($i++ < 10);
    */

    /*
    //Este tipo de loops se usa unicamente con arrays
    #For each
    //ejemplo facil con un array de index
    $gente = ['Brad', 'Jose', 'William'];
    foreach($gente as $persona) {
        echo $persona;
        echo '<br>';
    }*/

    /*
    //ejemplo un poco mas complejo con un array asociativo
    $gente = ['Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com'];
                    //clave       //valor
    foreach($gente as $persona => $email) {
        echo $persona.': '.$email;
        echo '<br>';
    }*/
?>