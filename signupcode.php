<?php
session_start();
include 'config.php';


$username = $_POST['username'];
$pwd = $_POST['password'];
$confirmPwd = $_POST['confirm_password'];

//To check empty fields
if (empty($username)){
    header("Location: index.php?error=empty");
    exit();
}
if (empty($pwd)){
    header("Location: index.php?error=empty");
    exit();
}
if (empty($confirmPwd)){
    header("Location: index.php?error=empty");
    exit();
}
// To compare the password
if ($pwd !== $confirmPwd) {
    header("Location: index.php?error=notsame");
    exit();
}
//To check existing users
else{
    $sql = "SELECT username FROM user WHERE username='$username'";
    $result = $dbh->query($sql);
    $emailcheck = mysqli_num_rows($result);
    if ($emailcheck > 0){
        header("Location: index.php?error=fname");
        exit();
    }else{
        $encrypted_password = password_hash($pwd, PASSWORD_DEFAULT); //This is how to encrypt passwords
        $sql = "INSERT INTO user (username, pwd) VALUES ('$username', '$encrypted_password')";
        $result = $dbh->query($sql);

        // header("Location: signup.php?successful");
        header("Location: login.php");
    }
}
