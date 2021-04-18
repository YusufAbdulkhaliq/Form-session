<?php
    if(isset($_POST['submit']) && !empty($_POST['firstname']) 
    && !empty($_POST['lastname']) && !empty($_POST['username']) 
    && !empty($_POST['email']) && !empty($_POST['password'])){
        session_start();
    
        $_SESSION['firstname'] = htmlentities($_POST['firstname']);
        $_SESSION['lastname'] = htmlentities($_POST['lastname']);
        $_SESSION['name'] = htmlentities($_POST['username']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        $_SESSION['password'] = htmlentities($_POST['password']);

        header('Location: login.php');
    }
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
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="firstname">Firstname :</label>
        <input type="text" name="firstname"><br><br>
        <label for="lastname">Lastname :</label>
        <input type="text" name="lastname"><br><br>
        <label for="username">Username :</label>
        <input type="text" name="username"><br><br>
        <label for="email">Email :</label>
        <input type="email" name="email"><br><br>
        <label for="username">Password :</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name= "submit">
    </form>
    <a href="login.php">Login</a>
 
</body>
</html>
