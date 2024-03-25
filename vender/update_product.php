<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$titile = $_POST['titile'];
$descriptaion = $_POST['descriptaion'];
$price = $_POST['price'];


$update = "UPDATE `items` SET `titile` = '$titile', `descriptaion` = '$descriptaion', `price` = '$price' WHERE `items`.`id` = $id";

mysqli_query($connect, $update);

header('Location: ../index.php');