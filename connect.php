<?php
// $servername = "127.0.0.1";
// $username = "root";
// $password = "860430";
// $db_name = "online_store";
//
// try{
//     $db = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
//     // set the PDO error mode to exception
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Connected successfully";
// }
// catch(PDOException $e){
//     echo $db_name;
//     echo "Connection failed: " . $e->getMessage();
// }

$servername = "127.0.0.1";
$username = "root";
$password = "860430";
$dbname = "online_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
