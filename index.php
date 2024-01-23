
<?php 
session_start();
require "database.php";


if(isset($_SESSION["user_id"])){
$records =$conn->prepare("SELECT id ,email, password FROM usuarios WHERE id=:id");
$records->bindParam(":id",$_SESSION['user_id']);
$records->execute();
$results = $records-> fetch(PDO::FETCH_ASSOC);
$user=null;

if(count($results)>0){
$user = $results;
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/styles.css">
    <title>Welcome to our app</title>
</head>
<body>
    <?php require 'parcials/header.php'?>

    
    <?php if (!empty ($user)):?>
    <br>Welcome. <?= $user['email'] ?> 
    <br> You area suscessfully logged In
    <a href="logout.php">Logout</a>
    <?php else: ?>
    <h1>Please login or Singup</h1>
    <a href="login.php">Login</a> or
    <a href="singup.php">SingUp</a>
    <?php endif; ?>
</body>
</html>
