<?php
session_start();
require("./funciones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body class="container">

    <?php require_once("./header.php"); ?>

    <main class="row">
        
        <!-- Parte central-->
        <?php
        //require_once("./main.php");
        
        ?>
        <div class="col-9">
            <section>
                <h2>Formulario de Login</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="user">Usuario </label>
                        <input type="text" name="user" id="user" class="form-control">
                        <small class="form-text text-muted">Introduce tu nombre de usuario aquí.</small>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña </label>
                        <input type="password" name="pass" id="pass" class="form-control">
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </form>
            </section>

            <?php
            if ($_POST) {
                if ($_POST["user"]!="") {
                    $usuario=$_POST["user"];
                }
                if ($_POST["pass"]!="") {
                    $contrasena=$_POST["pass"];
                }
            }
            if (!empty($usuario)) {
                if ($usuario=="user" && $contrasena=="123") {
                    $_SESSION["usuario"]="user";
                    $_SESSION["password"]="123";
                    header("Location: index.php");
                }else{
                    echo "Hay un error en sus datos.";
                }
            }


            ?>

        <!--Fin de la parte central-->
        </div>
        <!-- Parte lateral-->
        <?php require_once("./aside.php"); ?>
        <!-- Fin de la parte lateral-->

    </main>

    <?php require_once("./footer.php"); ?>

</body>

</html>