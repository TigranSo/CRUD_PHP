<?php

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background: #464646;
        color: white;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php
            $sql = "SELECT * FROM `items`";
            $products = mysqli_query($connect, $sql);
            $products = mysqli_fetch_all($products);
            foreach($products as $product) {
                echo '
                    <tr>
                        <td>' . $product[0] . '</td>
                        <td>' . $product[1] . '</td>
                        <td>' . $product[2] . '</td>
                        <td>' . $product[3] . '</td>
                        <td><a href="update.php?id='.$product[0].'">Update</a></td>
                        
                    </tr>   
                ';
            };
        ?>
    </table>
    <h3>Add new product</h3>
    <form method="post" action="vender/create.php">
        <p>title</p>
        <input type="text" name="titile">
        <p>descriptaion</p>
        <textarea name="descriptaion" cols="30" rows="10"></textarea>
        <p>Price</p>
        <input type="number" name="price"><br><br>
        <button type="submit">Add neq product</button>
    </form>
</body>
</html>