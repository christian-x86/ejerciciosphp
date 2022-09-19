<?php
$autos = ["Ford", "Seat", "BMW", "Renault"];

for ($i=0; $i < count($autos); $i++) { 
    echo "<p>".$autos[$i]."</p>";
}
foreach ($autos as $key => $value) {
    echo "<p>".$value."</p>";
}
?>