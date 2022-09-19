<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="euros">Euros: </label>
        <input type="number" name="euros" id="euros" step="0.01" required>
        <select name="divisa" id="divisa">
            <option value="yen">Yen</option>
            <option value="usd">USD</option>
            <option value="libra">Libra</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_POST) {
            
        switch ($_POST["divisa"]) {
            case 'yen':
                echo $_POST["euros"]*140.48." yenes";
                break;
                case 'usd':
                    echo $_POST["euros"]*1.02." dólares";
            break;
        case 'libra':
            echo $_POST["euros"]*0.85. " libras";
            break;
            default:
            
            break;
        }
    }
    ?>
</body>
</html>