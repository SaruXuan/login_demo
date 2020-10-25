<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/skeleton.css">

    <script src='js/jquery-3.5.1.min.js'></script>
    <script src='js/action.js'></script>
</head>
<body>
    <h1>Login Page</h1>
    <hr>
    <form>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="passowrd"><br>
        <button id="register">register</button>
        <button id="login">login</button>
    </form>
    <div id="registerStatus" class="">registration successful!</div>
    <div id="loginStatus" class="">login successful!</div>
    <div id="errorStatus" class=""></div>
</body>
</html>