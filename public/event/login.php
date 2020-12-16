<?php
header('Content-Type: application/json; charset=utf-8');
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
//email validation
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'please enter correct email format';
    exit();
}

$sql = 'SELECT * FROM `member` WHERE `email`=:email AND `password`=:password';
$statement = $pdo->prepare($sql);
$statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$statement->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$statement->execute();

if($statement->rowCount() > 0) {
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    echo json_encode($row);

    //session
    session_start();
    $_SESSION['email'] = $row['email'];
} else {
    //error
    http_response_code(400);
    echo 'email or password incorrect';
    exit();
}
?>