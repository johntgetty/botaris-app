<?php
function emptyInputSignup($nameFirst, $nameLast, $nameUser, $password, $passwordRepeat)
{
    $result;
    if (empty($nameFirst) || empty($nameLast) || empty($nameUser) || empty($password) || empty($passwordRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUserName($nameUser)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $nameUser)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat)
{
    $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $nameUser)
{
    $sql = "SELECT * FROM users WHERE userName = ?;";
    $stmt = mysqli_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $nameUser);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $nameFirst, $nameLast, $nameUser, $password)
{
    $sql = "INSERT INTO users (nameFirst, nameLast, nameUser, password) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $nameFirst, $nameLast, $nameUser, $hashedPassword);
    mysqli_stmt_execute($stmt);
    header("location: ../signup.php?error=none");
    exit();
}