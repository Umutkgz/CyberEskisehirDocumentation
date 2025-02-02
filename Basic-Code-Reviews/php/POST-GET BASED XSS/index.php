<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST"> 
    <input type="text" name="root" id="root">
    <button>Gönder</button>
</form>

</body>
</html>

<?php

if (isset($_POST['root'])) {
    $requestss = $_POST['root'];
    echo ($requestss);
}

/*
GET based:

<form action="" method="GET"> 
    <input type="text" name="root" id="root">
    <button>Gönder</button>
</form>

if (isset($_GET['root'])) {
    $requestss = $_GET['root'];
    echo ($requestss);
}
*/

?>
