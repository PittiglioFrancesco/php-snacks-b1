<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

$nome = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2 PHP</title>
</head>
<body>
    
<a href="snack2.php?name=&mail=&age=">Clicca qui per lo snack 2</a>

<?php


if (strlen($nome) > 3 && str_contains($mail, ".") == true && is_numeric($age) == true) {
    echo "Accesso Riuscito";
} else {
    echo "Accesso Negato";
}

?>

</body>
</html>