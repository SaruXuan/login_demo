<?php
include('../db.php');
try {
    $pdo = new PDO('mysql:host=localhost;dbname=login_demo;port=8889;charset=utf8', 'samuel', '0209');
} catch (PDOException $e) {
    echo "Database connection failed";
    exit();
}

if (empty($_POST['email']) || empty($_POST['password'])) {
    //error
    http_response_code(400);
    echo 'should not have blank';
    exit();
}

$sql = 'INSERT INTO `member` (`email`, `password`) VALUES (:email, :password)';
$statement = $pdo->prepare($sql);
$statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$statement->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$statement->execute();
?>