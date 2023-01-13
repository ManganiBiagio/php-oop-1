<?php
require_once "./classes/Movie.php";

$myMovie=new Movie("prova",["pippo","pluto"],1940,4.5);
$yourMovie=new Movie("indiana jones",["Harrison Ford"],2022,5);
var_dump($myMovie);
var_dump($yourMovie);


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