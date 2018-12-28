<?php
session_start();
$connect = include('/connect.php');
$email = $_POST['email'];
$password = $_POST['pwd'];

$sql = "SELECT * from account";
// $res = $db->prepare($sql);
// $res->execute();
$res = $conn->query($sql);

while($row = $res->fetch_assoc()){
    if(strcmp($email,$row['email'])==0){
        if(strcmp($password,$row['password'])==0){
        echo "successful";
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["user_name"] = $row["user_name"];
        header("Location: index.php");
        return;
        }
    }
}
echo "fail";
?>
