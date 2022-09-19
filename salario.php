<?php

if ($_POST["nombre"]=="" || $_POST["edad"]=="" || $_POST["sueldo"]=="") {
    echo "faltan datos";
    echo "<br>";
}

if ($_POST["edad"]<18) {
    echo "No es una edad válida";
    echo "<br>";
}

if ($_POST["sueldo"] > 40000) {
    echo "Cambie valor de las retenciones";
    echo "<br>";
}
?>