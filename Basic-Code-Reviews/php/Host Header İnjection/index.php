<?php

$host = $_SERVER['HTTP_HOST'];

$url = "https://" . $host . "/page.php";

header("location:" . $url);

?>
