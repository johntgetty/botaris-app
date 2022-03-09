<?php

if (isset($_POST["submit"])) {
    $nameFirst = $_POST["nameFirst"];
    $nameLast = $_POST["nameFirst"];
    $nameUser = $_POST["nameFirst"];
    $password = $_POST["nameFirst"];
    $passwordRepeat = $_POST["nameFirst"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($nameFirst, $nameLast, $nameUser, $password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUserName($nameUser) !== false) {
        header("location: ..signup.php?error=invalidusername");
        exit();
    }
    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ..signup.php?error=passwordmismatch");
        exit();
    }
    if (usernameExists($conn, $nameUser) !== false) {
        header("location: ..signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $nameFirst, $nameLast, $nameUser, $password);
} else {
    header("location: ../signup.php");
}
