<?php
    #Una funcion es un bloque de codigo que puede ser llamada de forma repetida
    /*
    function funcionSimple(){
        echo 'Hello world';
        echo '<br>';
    }

    //s yo hago solo lo de arriba veremos que no pasa nada y eso es porque la hemos declarado, pero no la hemos llamado a ejecutar

    funcionSimple();

    //ahora si vemos algo

    //Hablemos ahora de pasar argumentos a la funcion

    //Esto es una funcion a la que le hemos pasado un parametro nombre, un parametro no es mas que un valor que pasamos a una funcion para que esta lo use
    function decirHola($nombre){
        echo "Hola $nombre<br>";
    }

    decirHola('Joe');
    decirHola('Paco');
    //Si llegasemos a llamar a esta funcion sin pasarle un parametro, nos daria un error
    //o podemos crear la funcion de manera que si no pasas parametro use un nombre por defecto
        function decirHolaRobusto($nombre = 'Mundo'){
        echo "Hola $nombre<br>";
    }

    decirHolaRobusto("Manu");
    decirHolaRobusto();

    //
    function agregarNumeros($num1, $num2){
        #echo $num1 + $num2; //Si usamos echo solo estamos mostrandolo por pantalla, por lo general si queremos retornar el valor usarmos "return"
        return $num1 + $num2; //No es visible en pantalla, pero es lo que necesitamos usar si queremos pasar datos a otras funciones o almacenar en variables
    }

    agregarNumeros(2,3);
    */
    //Pasar argumentos por referencia
    $miNumero = 10;

    function agregarCinco($num) {//funcion donde paso argumento como valor
        $num += 5;
    }

    function agregarDiez(&$num) {//funcion donde paso argumento por referencia
        $num += 10;
    }

    agregarCinco($miNumero);
    echo "Valor: $miNumero<br>";
    agregarDiez($miNumero);
    echo "Valor: $miNumero<br>";

    //oK, Esto es muy facil de entender. En el primer caso uno esperaria que devolviese 15, 10 + 5. pero no lo hace
    //esto ocurre porque la funcion toma el valor '10' y le suma 5, pero no modifica la variable, solo la usa para saber cuanto vale,
    //10 en este caso. En el segundo caso, no le pasamos el valor sino la referencia, por lo que oficialmente, las cuentas que hagamos
    //afectan a la variable y la modifican
?>