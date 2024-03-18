<?php
include 'klant.php';
$klanten = new klant($myDb);

$alles = $klanten->selectAllklant()->fetchAll();

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
            <th>email</th>
            <th>password</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <?php foreach ($alles as $klant){
                echo "<td>".$klant['klantID']."</td>";
                echo "<td>".$klant['naam']."</td>";
                echo "<td>".$klant['email']."</td>";
                echo "<td>".$klant['password']."</td>";
                echo "<td><a href='edit.php?ID=".$klant['klantID']."'>EDIT</a></td>";
            
            ?>
        </tr>
        <?php }?>
    </table>
</body>
</html>