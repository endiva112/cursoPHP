<?php

#cuando mandas info con un get, pasas info por la url, es poco seguro,
#con post es mas seguro, se manda en el http header siendo mas seguro.

    if (isset($_GET['name'])) {
        #echo $_GET['name'];
        #print_r($_GET);

        //manera mas segura
        $name = htmlentities($_GET['name']);
        #echo $name;
    }

    //Investigar cross scipting attacks o XSSS
    //un hacker mete un script en un form para joderte desde dentro
    //ejemplo no dañino: <script>alert(1)</script>
    //para evitar estos ataques podemos usar una funcion llamada html entities


    //usemos ahora post
    /*
    if (isset($_POST['name'])) {
        print_r($_POST);
        echo htmlentities($_POST['name']);
    }*/

    //otra forma de obtener la info es usando REQUEST
    /*
    if (isset($_REQUEST['name'])) {
        print_r($_REQUEST);
        echo htmlentities($_REQUEST['name']);
    }//esto funciona sin importar si el metodo del formulario esta puesto a post o get
    #pero mejor usar solo post y request*/

    #echo $_SERVER['QUERY_STRING']; #solo va con get
    //podemos mandar query strings en url sin usar un formulario
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
<!--Para que un formulario funcione, necesitamos elegir metodo y un action-->
    <form method="GET" action="get_post.php">
        <div>
            <label for="">Name</label><br>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email" id="">
        </div>
        <input type="submit" value="Submit">
    </form>


    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile";?></h1>

</body>
</html>