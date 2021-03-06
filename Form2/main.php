<?php

    session_start();

    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h2>You have successfully signedup to DEMO SESSION</h2>
    <h3>Your Signup detailes are :</h3>
    <ul>
        <li>Firstname : <?php echo $firstname ?></li>
        <li>Lastname : <?php echo $lastname ?></li>
        <li>Username : <?php echo $name ?></li>
        <li>Email : <?php echo $email ?></li>
        <li>Password : <?php echo $password ?></li>
    </ul>
    <p>👎👎 click the link below to proceed 👎👎</p>
    <a href="dashboard.php">👉👉click me👈👈</a>

</body>
</html>