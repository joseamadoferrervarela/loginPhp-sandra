<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/styles.css">
    <title>title</title>
</head>
<body>
    <?php require 'parcials/header.php'?>
    <h1>login</h1>
    <span> or <a href="singup.php">singup</a></span>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="enter your email">
        <input type="password" name="password" placeholder="enter your password">
        <input type="submit" value="send">
    </form>
</body>
</html>