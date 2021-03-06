<?php
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <div class= "container">
        <div class= "navtxt"><h1 class= "navtxt">Side Hustle</h1></div>
        <nav class= "nav">
        <ul class= "ul">
            <li><a href="#">Page1</a></li>
            <li><a href="#">Page2</a></li>
            <li><a href="#">Page3</a></li>
        </ul> 
        </nav>
        </div>
    </header>
    <h2>Welcome <?php echo $name ?> to your dashboard</h2>
    <button><a href="index.php">Logout</a></button>
</body>
</html>