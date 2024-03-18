<?php
include 'product.php';
$producten = new Product($myDb);

$alles = $producten->selectAllProduct()->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Overzicht Producten</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>naam</th>
            <th>Omschrijving</th>
            <th>Prijs</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <?php foreach ($alles as $product){
                echo "<td>".$product['productid']."</td>";
                echo "<td>".$product['naam']."</td>";
                echo "<td>".$product['omschrijving']."</td>";
                echo "<td>".$product['prijs']."</td>";
                echo "<td><a href='edit.php?ID=".$product['productid']."'>EDIT</a></td>";
            
            ?>
        </tr>
        <?php }?>
    </table>
</body>
</html>