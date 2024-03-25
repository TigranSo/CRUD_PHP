<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'items');

if (!$connect ) {
    echo 'PIPEC!!!';
}
