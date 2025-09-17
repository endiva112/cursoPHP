<?php
    //investigar si date da la hora de la maquina en la que se ejecuta el php, imagino que si

    //Fechas
    /*
    echo date('d'); //Obtener el dia
    echo date('m'); //Obtener el mes
    echo date('y'); //Obtener los dos ultimos digitos del año, ej: 25
    echo date('Y'); //Obtener el año completo
    echo date('l'); //Obtener dia de la semana

    //Formatos mas complejos
    echo date('Y/m/d');
    echo date('m-d-Y');*/

    //Horas
    /*
    echo date('h'); //hora
    echo date('i'); //minuto
    echo date('s'); //segundo
    echo date('a'); //AM o PM

    echo date('h:i:sa');*/

    //Establecer la zona horaria
    /*
    date_default_timezone_set("America/New_York");
    
    $timeStamp = mktime(10,14,54, 9, 10, 1981);
    #echo $timeStamp;

    //Un time stamp es... PEDIR A GPT RELLENAR DEFINICION

    //para pasar el timestamp a una fecha legible
    echo date("m/d/Y h:i:sa", $timeStamp);*/

    /*
    $timeStamp2 = strtotime('7:00pm March 22 2016');
    #echo $timeStamp2;
    echo date("m/d/Y h:i:sa", $timeStamp2);

    echo '<br>';

    $timeStamp3 = strtotime('tomorrow');
    echo date("m/d/Y h:i:sa", $timeStamp3);

    echo '<br>';

    $timeStamp4 = strtotime('next sunday');
    echo date("m/d/Y h:i:sa", $timeStamp4);

    echo '<br>';

    $timeStamp5 = strtotime('+ 2 Days');
    echo date("m/d/Y h:i:sa", $timeStamp5);*/

    #php.net/manual/en/function.cualquierfuncion.php para buscar info rapido
?>