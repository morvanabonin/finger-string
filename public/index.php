<?php
//require_once('partials/header.phtml');
//require_once('login.php');

// Create and configure Slim app
require __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/../configs/settings.php';
$settings = $settings["settings"];

function getConnection($settings) {;
    $dbh = new PDO("mysql:host={$settings['db']['host']};dbname={$settings['db']['dbname']}",
                                $settings['db']['user'],
                                $settings['db']['pass']);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

$db = getConnection($settings);

function getUsers($db) {
    $sql = 'SELECT * FROM user';
    $users = $db->query($sql);

    return $users;
}

function validateLogin($db) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = $db->prepare('SELECT * FROM user WHERE username= :user AND password= :pass');
    $query->bindParam(':user', $user, PDO::PARAM_STR);
    $query->bindParam(':pass', $pass, PDO::PARAM_STR);
    $query->execute();
    $ret = $query->fetch(PDO::FETCH_ASSOC);

    if ($ret) {
        header("Location: http://172.19.0.3/home.php");
        exit();
    } else {
        echo "Usuário e senha inválidos! Tente novamente";
    }

    _unset($user, $pass);

}

function _unset($user, $pass) {
    unset($user);
    unset($pass);
}

validateLogin($db);

?>
<html<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Finger String</title>
</head>
<body>
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="index.php" method="POST">
                <input name="user" type="text" placeholder="username">
                <input name="pass" type="password" placeholder="password">
                <button class="btn btn-info btn-block login" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
    <script src="js/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
</html>


