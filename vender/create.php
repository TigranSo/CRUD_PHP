<?php

require_once '../config/connect.php';

$titile = $_POST['titile'];
$descriptaion = $_POST['descriptaion'];
$price = $_POST['price'];


$create = "INSERT INTO `items` (`id`, `titile`, `descriptaion`, `price`) VALUES (NULL, '$titile', '$descriptaion', '$price')";

mysqli_query($connect, $create);

header('Location: ../index.php');