<?php
    require_once 'config/connect.php';
    $product_id = $_GET['id'];
    $query = "SELECT * FROM `items` WHERE `id` = '$product_id' ";
    $product = mysqli_query($connect, $query);
    $product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h3>Update product</h3>
    <form method="post" action="vender/update_product.php">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>title</p>
        <input type="text" name="titile" value="<?= $product['titile'] ?>">
        <p>descriptaion</p>
        <textarea name="descriptaion" cols="30" rows="10"><?= $product['descriptaion'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"><br><br>
        <button type="submit">Update product</button>
    </form>
    
</body>
</html>