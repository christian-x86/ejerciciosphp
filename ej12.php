<?php
$clase = [    
    ["nombre" => "Antonius","email"=> "agotthardsf0@ow.ly", "tel"=>"297-221-6073"],
    ["nombre" => "Kerrill","email"=> "kbailie1@wikimedia.org", "tel"=>"761-666-0507"],
    ["nombre" => "Welsh","email"=> "wdulson2@bizjournals.com", "tel"=>"474-597-8787"],
    ["nombre" => "Sarena","email"=> "swabersinke3@networksolutions.com", "tel"=>"653-192-4721"],
    ["nombre" => "Natalie","email"=> "nmaultby4@va.gov", "tel"=>"600-171-1439"],
    ["nombre" => "Sebastiano","email"=> "sserman5@wunderground.com", "tel"=>"515-662-4314"],
    ["nombre" => "Idelle","email"=> "ipauletto6@intel.com", "tel"=>"182-384-7830"],
    ["nombre" => "Eward","email"=> "ebramhall7@geocities.com", "tel"=>"165-118-2735"],
    ["nombre" => "Janet","email"=> "jtoolan8@simplemachines.org", "tel"=>"162-312-7228"],
    ["nombre" => "Glenna","email"=> "gtrimbey9@webeden.com", "tel"=>"165-118-2735"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: solid black 1px;
        }
    </style>
</head>
<body>
    <?php
    echo "<table><tr><td>Nombre</td><td>Email</td><td>Tel</td></tr>";
    foreach ($clase as $key => $value) {
        echo "<tr>";
        foreach ($value as $key2 => $value2) {
            echo "<td>".$value2."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>