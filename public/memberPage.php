<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/logincss.css">

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/action2.js"></script>
</head>
<body>
    <img id="pass-img" src="src/verified.png" alt="pass">
    <h2 id="resultText">Welcome! <h2 id="memberName"><?= $_SESSION['email'] ?></h2></h2>
    <button id="logout">logout</button>
</body>
</html>