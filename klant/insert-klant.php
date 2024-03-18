<?php
include '../header.php';
include 'klant.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
try {
    $klant = new klant($myDb);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $klant ->addKlant($_POST['naam'], $_POST['email'], $password);
    echo"succesfully added";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="naam" >
        <input type="text" name="email" >
        <input type="password" name="password" >
        <input type="submit">
    </form>
</body>
</html>