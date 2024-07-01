<?php
$username = "root";
$id = "";
$servername = "localhost";
$dbname = "school";


$conn = new mysqli($servername, $username, $id, $dbname);

if ($conn -> connect_error)

{
    die("Connection Failed.".$conn->connect_error);
}
else{
    echo "connection Successfull";
}
?>