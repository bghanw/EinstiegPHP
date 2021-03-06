<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
</head>
<body>
<?php

require_once 'src/FightController.php';
require_once 'src/IndexController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = null;

switch ($action) {
    case 'index':
        $controller = new IndexController();
        break;
    case 'fight':
        $controller = new FightController();
        break;
}

if ($controller !== null) {
    $controller->execute();
}
?>

</body>
</html>