<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Devolucion</title>
</head>
<body>
<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut", "AMERICA DE CALI"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>
</body>
</html>