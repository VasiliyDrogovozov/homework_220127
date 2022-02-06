<?php
include('/app/vendor/autoload.php');

use App\Computer as Computer;
use App\User as User;
$computer = new Computer('vasiliy');
$computer->programming();

echo '<br>';

$user = new User('vasiliy');
$user->work($computer);






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>
