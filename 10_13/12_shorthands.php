<?php
    # Operador ternario y abreviaciones de ifs

    
    $variable = false;
    /**
     * Son útiles para pasar de 
     * if (variable) {
     *      echo 'es verdadera';
     * } else {
     *      echo 'es falsa':
     * }
     * 
     * por:
     */
    #echo ($variable) ? 'Es verdadera' : 'Es falsa'; #Super compacto

    //el operador ternario tambien se podria usar para establecer valores
    /*
    $estaRegistrado = ($variable == true) ? true : false;
    #echo $estaRegistrado;

    //incluso se pueden anidar
    $edad = 10;
    $puntuacion = 15;

    //ternario anidado
    echo 'Tu puntuación es: '
    .($puntuacion > 10 ? ($edad > 10 ? 'Común' : 'Excepcional') : ($edad > 10 ? 'Horrible' : 'Común'));
    //si la puntuacion es mayor a 10, miramos la edad y si es mayor a 10 es comun, si es igual o menor es excepcional
    //si la puntuacion fuese menor a 10, se comprueba edad, si tiene mas de 10 años es terrible y con 10 o menos
    //seria promedio. puedes jugar con los valores para ver los cambios*/
    
    //ahora vamos a ver sintaxis alternativa para condicionales, loops, etc
    //cuando buscamos introducir php en el html se ve algo así:
    $estaRegistrado = false;
    $array = [1,2,3,4,5];
?>
<div>
    <?php if($estaRegistrado) {?>
    <h1>Bienvenido usuario</h1>
    <?php } else {?>
    <h1>Bienvenido invitado</h1>
    <?php } #Esto como puedes ver se ve super feo, podemos cambiarlo?>
</div>


<div>
    <?php if($estaRegistrado): ?>
        <h1>Bienvenido usuario</h1>
    <?php else: ?>
        <h1>Bienvenido invitado</h1>
    <?php endif; ?>
</div>


<div>
    <?php foreach($array as $valor): ?>
    <?php echo $valor; ?>
    <?php endforeach; ?>
</div>


<div>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>