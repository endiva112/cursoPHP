<?php
    //Filtros y validación
    # Esta funcion chequea valores post(INPUT_POST) y get(INPUT_GET)
    /*
    if(filter_has_var(INPUT_POST, 'data')) {
        echo 'data found';
    } else {
        echo 'no data';
    }*/

    /*
    if(filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];

        //iamginemos que queremos eliminar los caracteres no validos
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';


    #Ahora validaremos si introducen un direccion email válida
    
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
            echo 'Email válido';
        } else { echo 'Emáil no válido'; }
    

    //habiendo visto FILTER_SANITIZE_EMAIL, ahora podemos cambiar el codigo de arriba por:
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email válido';
        } else {
            echo 'Emáil no válido';
        }
    }*/
    //Estas son algunas de las validaciones que podemos hacer:
    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL

    //Estas son algunos de los tipos de datos que podemos "desinfectar / limpiar"
    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL


    //Un caso muy útil para evitar que la gente corra scripts
    /*
    $var = '<script>alert(1)</script>';
    #echo $var;//Esto es peligroso, lo comentamos y hacemos echo usando nuestra funcion para desinfectar
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);*/

    #Filter_input_array
    
    $filtros = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range"=> 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filtros));
    //Esto nos permite validar varios campos a la vez, pero de datos de entrada que obtiene php del post o del get

    $filtros2 = array(
        "nombre" => array(
            "filter" => FILTER_CALLBACK, #Esto nos permite aplicarle una funcion a este valor
            "options" => "ucwords" #Gracias a lo de arriba esto funciona y lo que logra es poner la primera letra de cada palabra en mayusculas
        ),
        "edad" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options"=> array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    //Digamos que ya tenemos un array entre manos, si esta cargado en memoria, como el de abajo
    $array = array(
        "nombre" => "Enrique Díaz",
        "edad" => "22",
        "email" => "enrique@gmail.com"
    ) ;
    //debemos usar una funcion similar pero ligeramente distinta
    print_r(filter_var_array($array, $filtros2));
?>


<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Enviar</button>
</form>