<?php
$connect = include("/connect.php");
$email = $_POST["email"];
$userName = $_POST["userName"];
$pwd = $_POST["pwd"];

try {
    $sql = "INSERT INTO account (email, user_name, password)
    VALUES ('{$email}', '{$userName}', '{$pwd}')";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "<script>alert('會員註冊成功!')</script>";
    header("Location: login.html");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$db = null;
?>